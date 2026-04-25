<?php

define('BASE_URL', '/projekt_cajovna/');

require "../appka/jadro/router.php";
require "../appka/jadro/databaza.php";

$router = new Router();
$router->handle($_GET['page'] ?? 'home');