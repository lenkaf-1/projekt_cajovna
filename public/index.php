<?php

require "../appka/jadro/router.php";
require "../appka/jadro/databaza.php";
require "../appka/modely/Product.php";
require "../appka/kontrolery/productcontroller.php";

$router = new Router();
$router->handle(); ?>
