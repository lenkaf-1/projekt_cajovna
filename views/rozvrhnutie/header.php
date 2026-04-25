<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Čajový pokoj</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

      <a class="navbar-brand" href="index.php?route=domov">
        <img
          src="../img/11580448.jpg"
          alt="Logo"
          width="50"
          height="50"
          class="d-inline-block align-text-top"
        />
      </a>

      <a href="index.php?route=kosik" class="cart-icon ms-auto">
        <svg width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1-2 0 1 1 0 0 0 2 0zm7 0a1 1 0 1 1 0 2 1 1 0 0 1-2 0 1 1 0 0 0 2 0z"/>
        </svg>
        <span class="cart-count">
          <?php
          if (session_status() === PHP_SESSION_NONE) {
              session_start();
          }
          $cartCount = array_sum($_SESSION['cart'] ?? []);
          echo $cartCount;
          ?>
        </span>
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
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

        </ul>
      </div>

    </div>
  </nav>
</header>



