<?php

require_once __DIR__ . '/../modely/Product.php';

class ProductController {

    public function index() {
        return [
            new Product(1, "Zelený čaj", 4.50, "/projekt_cajovna/img/ponukazelenycaj1.jpg"),
            new Product(2, "Biely čaj", 5.20, "/projekt_cajovna/img/whitetea1.jpg"),
            new Product(3, "Čierny čaj", 3.80, "/projekt_cajovna/img/black1.jpg"),
        ];
    }

    public function addToCart() {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $id = (int)$_GET['id'];

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (!isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] = 1;
        } else {
            $_SESSION['cart'][$id]++;
        }

        header("Location: index.php?route=ponuka");
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

    public function removeFromCart() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $productId = $_POST['product_id'] ?? null;

        if ($productId && isset($_SESSION['cart'][$productId])) {
            unset($_SESSION['cart'][$productId]);
        }

        header("Location: index.php?route=kosik");
        exit;
    }
}