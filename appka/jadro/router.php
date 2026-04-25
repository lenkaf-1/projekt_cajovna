<?php

require_once __DIR__ . '/../kontrolery/productcontroller.php';

class Router {

    public function handle() {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $route = $_GET['route'] ?? 'domov';

        if ($route === 'add_to_cart') {
            (new ProductController())->addToCart();
            exit;
        }

        if ($route === 'order') {
            (new ProductController())->processOrder();
            exit;
        }

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

            case 'thanku':
                include __DIR__ . '/../../views/thanku.php';
                break;

            default:
                echo "404 - stránka neexistuje";
        }

        include __DIR__ . '/../../views/rozvrhnutie/footer.php';
    }
}