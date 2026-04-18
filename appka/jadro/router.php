<?php

class Router {
    public function handle() {
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
                include __DIR__ . '/../../views/ponuka.php';
                break;

            default:
                echo "404 - stránka neexistuje";
        }

        include __DIR__ . '/../../views/rozvrhnutie/footer.php';
    }
}
