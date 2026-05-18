<?php

require_once __DIR__ . '/../classes/Product.php';
require_once __DIR__ . '/../classes/Database.php';

class ProductController
{
    private function db()
    {
        return (new Database())->getConnection();
    }

    private function startSession()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    private function isAdmin()
    {
        $this->startSession();
        return isset($_SESSION['user']['role']) && $_SESSION['user']['role'] === 'admin';
    }

    public function index()
    {
        $db = $this->db();

        $stmt = $db->query("SELECT * FROM produkty");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $products = [];

        foreach ($rows as $row) {
            $products[] = new Product(
                $row['id'],
                $row['nazov'],
                $row['cena'],
                $row['obrazok']
            );
        }

        return $products;
    }

    public function createProduct()
    {
        if (!$this->isAdmin()) {
            exit("No access");
        }

        $db = $this->db();

        $stmt = $db->prepare("
            INSERT INTO produkty (nazov, cena, obrazok)
            VALUES (?, ?, ?)
        ");

        $stmt->execute([
            $_POST['nazov'] ?? '',
            $_POST['cena'] ?? 0,
            $_POST['obrazok'] ?? ''
        ]);

        header("Location: index.php?route=admin_produkty");
        exit;
    }

    public function updateProduct()
    {
        if (!$this->isAdmin()) {
            exit("No access");
        }

        $db = $this->db();

        $stmt = $db->prepare("
            UPDATE produkty
            SET nazov = ?, cena = ?, obrazok = ?
            WHERE id = ?
        ");

        $stmt->execute([
            $_POST['nazov'] ?? '',
            $_POST['cena'] ?? 0,
            $_POST['obrazok'] ?? '',
            $_POST['id'] ?? 0
        ]);

        header("Location: index.php?route=admin_produkty");
        exit;
    }

    public function deleteProduct()
    {
        if (!$this->isAdmin()) {
            exit("No access");
        }

        $db = $this->db();

        $stmt = $db->prepare("DELETE FROM produkty WHERE id = ?");
        $stmt->execute([(int)($_GET['id'] ?? 0)]);

        header("Location: index.php?route=admin_produkty");
        exit;
    }

    public function addToCart()
    {
        $this->startSession();

        $id = (int)($_GET['id'] ?? 0);

        if ($id > 0) {
            $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
        }

        header("Location: index.php?route=ponuka");
        exit;
    }

    public function getCart()
    {
        $this->startSession();

        $cart = $_SESSION['cart'] ?? [];
        $products = $this->index();

        $cartItems = [];

        foreach ($cart as $id => $qty) {
            foreach ($products as $product) {
                if ($product->getId() == $id) {
                    $cartItems[] = [
                        'product' => $product,
                        'quantity' => $qty
                    ];
                }
            }
        }

        return $cartItems;
    }

    public function removeFromCart()
    {
        $this->startSession();

        $id = (int)($_POST['product_id'] ?? 0);

        if ($id > 0) {
            unset($_SESSION['cart'][$id]);
        }

        header("Location: index.php?route=kosik");
        exit;
    }

    public function createOrder()
    {
        $this->startSession();

        $db = $this->db();
        $cart = $_SESSION['cart'] ?? [];

        if (empty($cart)) {
            header("Location: index.php?route=kosik");
            exit;
        }

        $products = $this->index();
        $total = 0;

        foreach ($cart as $id => $qty) {
            foreach ($products as $p) {
                if ($p->getId() == $id) {
                    $total += $p->getPrice() * $qty;
                }
            }
        }

        $stmt = $db->prepare("
            INSERT INTO objednavky (meno, email, telefon, adresa, celkova_suma)
            VALUES (?, ?, ?, ?, ?)
        ");

        $stmt->execute([
            $_POST['name'] ?? '',
            $_POST['email'] ?? '',
            $_POST['phone'] ?? '',
            $_POST['address'] ?? '',
            $total
        ]);

        $orderId = $db->lastInsertId();

        foreach ($cart as $id => $qty) {
            foreach ($products as $p) {
                if ($p->getId() == $id) {

                    $stmt = $db->prepare("
                        INSERT INTO objednavka_produkty
                        (objednavka_id, produkt_id, nazov, cena, mnozstvo)
                        VALUES (?, ?, ?, ?, ?)
                    ");

                    $stmt->execute([
                        $orderId,
                        $p->getId(),
                        $p->getName(),
                        $p->getPrice(),
                        $qty
                    ]);
                }
            }
        }

        unset($_SESSION['cart']);

        header("Location: index.php?route=thanku");
        exit;
    }

    public function saveContact()
    {
        $db = $this->db();

        $meno = trim($_POST['meno'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $sprava = trim($_POST['sprava'] ?? '');

        if ($meno === '' || $email === '' || $sprava === '') {
            header("Location: index.php?route=kontakt");
            exit;
        }

        $stmt = $db->prepare("
            INSERT INTO kontakty (meno, email, sprava)
            VALUES (?, ?, ?)
        ");

        $stmt->execute([$meno, $email, $sprava]);

        header("Location: index.php?route=thanku");
        exit;
    }
}