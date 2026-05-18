<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$isLogged = isset($_SESSION['user']);
$isAdmin = isset($_SESSION['user']['role']) && $_SESSION['user']['role'] === 'admin';
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Čajový pokoj</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="<?= ($_GET['route'] ?? '') === 'login' ? 'login-page' : '' ?>">

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container-fluid">

    <a class="navbar-brand" href="index.php?route=domov">
        <img src="../img/11580448.jpg" width="50" height="50" alt="Logo">
    </a>

    <a href="index.php?route=kosik" class="cart-icon ms-auto d-flex align-items-center">

        <img src="../img/kosik.png" width="35" height="35" style="filter: invert(1);">

        <span class="cart-count ms-1">
            <?= array_sum($_SESSION['cart'] ?? []) ?>
        </span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">

        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link text-white" href="index.php?route=domov">DOMOV</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="index.php?route=ponuka">HLAVNÁ PONUKA</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="index.php?route=kontakt">KONTAKT</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="index.php?route=o_nas">O NÁS</a>
            </li>

            <?php if ($isAdmin): ?>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="index.php?route=admin_produkty">
                        ADMIN PANEL
                    </a>
                </li>
            <?php endif; ?>

            <?php if (!$isLogged): ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?route=login">
                        PRIHLÁSENIE
                    </a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?route=logout">
                        ODHLÁSIŤ SA (<?= htmlspecialchars($_SESSION['user']['username'] ?? '') ?>)
                    </a>
                </li>
            <?php endif; ?>

        </ul>

    </div>

</div>

</nav>
</header>