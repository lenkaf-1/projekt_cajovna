<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Lenka Filipova" />
    <meta name="description" content="Ponuka rôznych čajov" />
    <title>🍵 Čajový pokoj 🍵</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
   <?php require __DIR__ . '/oddelenie/header.php'; ?>

    <div class="predstavenie">
      <h1 class="kto-sme-nadpis">Kto sme?</h1>
    </div>
    <div class="popis1">
      <p class="popisok">
        Sme Čajový pokoj, naša firma sa zaoberá predajom rôznych čajov. Našim
        cieľom je priniesť vám ten najlepší zážitok z pitia čaju a vytvoriť
        miesto, kde si môžete oddýchnuť a načerpať novú energiu.
      </p>
    </div>
    <div class="sidlo">
      <h1 class="kde-sidlime-nadpis">Kde sídlime?</h1>
    </div>
    <div class="popis2">
      <p class="popisok2">
        Naša spoločnosť sídli v srdci Bratislavy, kde máme aj našu predajňu.
        Navštívte nás na adrese Hlavné námestie 5, 811 01 Bratislava. Tešíme sa
        na vašu návštevu!
      </p>
    </div>
    <div id="cookie-banner">
      Táto stránka používa cookies.
      <button id="cookie-accept">Rozumiem</button>
    </div>
<?php require __DIR__ . '/oddelenie/footer.php'; ?>
<?php require __DIR__ . '/oddelenie/script.php'; ?>
  </body>
</html>
