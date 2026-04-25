<?php

require_once __DIR__ . '/../modely/Product.php';

class ProductController {

    public function index() {

        $base = defined('BASE_URL') ? BASE_URL : '/projekt_cajovna/';

        return [
            new Product(1, "Zelený čaj", 4.50, $base . "img/ponukazelenycaj1.jpg"),
            new Product(2, "Biely čaj", 5.20, $base . "img/whitetea1.jpg"),
            new Product(3, "Čierny čaj", 3.80, $base . "img/black1.jpg"),
        ];
    }

    public function addToCart() {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_GET['id'])) {
            header("Location: " . (defined('BASE_URL') ? BASE_URL : '/projekt_cajovna/') . "index.php?route=ponuka");
            exit;
        }

        $id = (int) $_GET['id'];

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;

        header("Location: " . (defined('BASE_URL') ? BASE_URL : '/projekt_cajovna/') . "index.php?route=ponuka");
        exit;
    }

    public function getCart() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $cart = $_SESSION['cart'] ?? [];
        $products = $this->index();
        $cartItems = [];

        foreach ($cart as $id => $quantity) {
            foreach ($products as $product) {
                if ($product->getId() == $id) {
                    $cartItems[] = [
                        'product' => $product,
                        'quantity' => $quantity
                    ];
                    break;
                }
            }
        }

        return $cartItems;
    }

    public function processOrder() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header("Location: " . (defined('BASE_URL') ? BASE_URL : '/projekt_cajovna/') . "index.php?route=kosik");
            exit;
        }

        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $address = $_POST['address'] ?? '';

        $cartItems = $this->getCart();

        if (empty($cartItems)) {
            header("Location: " . (defined('BASE_URL') ? BASE_URL : '/projekt_cajovna/') . "index.php?route=kosik");
            exit;
        }

        unset($_SESSION['cart']);

        header("Location: " . (defined('BASE_URL') ? BASE_URL : '/projekt_cajovna/') . "index.php?route=thanku");
        exit;
    }
}