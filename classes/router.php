<?php

require_once __DIR__ . '/../classes/ProductController.php';
require_once __DIR__ . '/../classes/LoginController.php';

class Router
{
    public function handle()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $route = $_GET['route'] ?? 'domov';

        include __DIR__ . '/../views/rozvrhnutie/header.php';

        switch ($route) {

            case 'domov':
                include __DIR__ . '/../views/domov.php';
                break;

            case 'kontakt':
                include __DIR__ . '/../views/kontakt.php';
                break;

            case 'o_nas':
                include __DIR__ . '/../views/o_nas.php';
                break;

            case 'ponuka':
                $products = (new ProductController())->index();
                include __DIR__ . '/../views/ponuka.php';
                break;

            case 'kosik':
                $cartItems = (new ProductController())->getCart();
                include __DIR__ . '/../views/kosik.php';
                break;

            case 'add_to_cart':
                (new ProductController())->addToCart();
                exit;

            case 'remove_from_cart':
                (new ProductController())->removeFromCart();
                exit;

            case 'order':
                (new ProductController())->createOrder();
                exit;

            case 'login':
                include __DIR__ . '/../views/login.php';
                break;

            case 'login_process':
                (new LoginController())->login();
                exit;

            case 'logout':
                (new LoginController())->logout();
                exit;

            case 'contact_send':
                (new ProductController())->saveContact();
                exit;

            case 'thanku':
                include __DIR__ . '/../views/thanku.php';
                break;

            case 'admin_produkty':
                if (($_SESSION['user']['role'] ?? '') !== 'admin') {
                    echo "No access";
                    break;
                }
                $products = (new ProductController())->index();
                include __DIR__ . '/../views/admin/produkty.php';
                break;

            case 'admin_create':
                if (($_SESSION['user']['role'] ?? '') !== 'admin') {
                    echo "No access";
                    break;
                }
                include __DIR__ . '/../views/admin/create.php';
                break;

            case 'admin_create_process':
                (new ProductController())->createProduct();
                exit;

            case 'admin_edit':
                if (($_SESSION['user']['role'] ?? '') !== 'admin') {
                    echo "No access";
                    break;
                }

                $id = (int)($_GET['id'] ?? 0);
                $products = (new ProductController())->index();

                $product = null;
                foreach ($products as $p) {
                    if ($p->getId() === $id) {
                        $product = $p;
                        break;
                    }
                }

                include __DIR__ . '/../views/admin/edit.php';
                break;

            case 'admin_update':
                (new ProductController())->updateProduct();
                exit;

            case 'admin_delete':
                (new ProductController())->deleteProduct();
                exit;

            default:
                echo "<h1>404 - stránka neexistuje</h1>";
                break;
        }

        include __DIR__ . '/../views/rozvrhnutie/footer.php';
    }
}