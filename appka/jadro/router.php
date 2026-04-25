<?php

require_once __DIR__ . '/../kontrolery/productcontroller.php';

class Router {

    public function handle() {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $route = $_GET['route'] ?? 'domov';

        include __DIR__ . '/../../views/rozvrhnutie/header.php';

        switch ($route) {

            case 'domov':
                include __DIR__ . '/../../views/domov.php';
                break;

            case 'kontakt':
                include __DIR__ . '/../../views/kontakt.php';
                break;

            case 'o_nas':
                include __DIR__ . '/../../views/o_nas.php';
                break;

            case 'ponuka':
                $products = (new ProductController())->index();
                include __DIR__ . '/../../views/ponuka.php';
                break;

            case 'kosik':
                $cartItems = (new ProductController())->getCart();
                include __DIR__ . '/../../views/kosik.php';
                break;

            case 'add_to_cart':
                (new ProductController())->addToCart();
                exit;

            case 'remove_from_cart':
                (new ProductController())->removeFromCart();
                exit;

            case 'thanku':
                $contactData = null;
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $contactData = [
                        'meno' => htmlspecialchars(trim($_POST['meno'] ?? '')),
                        'email' => htmlspecialchars(trim($_POST['email'] ?? '')),
                        'sprava' => nl2br(htmlspecialchars(trim($_POST['sprava'] ?? ''))),
                    ];
                }
                include __DIR__ . '/../../views/thanku.php';
                break;

            default:
                echo "404 - stránka neexistuje";
        }

        include __DIR__ . '/../../views/rozvrhnutie/footer.php';
    }
}