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

    <div class="pozadie">
      <div>
        <h1 class="textnaobr">Čaj pre pohladenie duše</h1>
      </div>
    </div>
    <hr />

    <div class="accordion">
      <div class="question">Fakt o čaji #1</div>
      <div class="answer">
        Vedeli ste, že čaj je druhý najviac konzumovaný nápoj na svete po vode?
      </div>
    </div>
    <div class="accordion">
      <div class="question">Fakt o čaji #2</div>
      <div class="answer">
        Čaj bol objavený v Číne pred viac ako 5000 rokmi cisárom Shen Nongom.
      </div>
    </div>
    <div class="accordion">
      <div class="question">Fakt o čaji #3</div>
      <div class="answer">
        Existuje viac ako 3000 rôznych druhov čaju na svete.
      </div>
    </div>
    <div class="slideshow">
      <div class="slide active">
        <img src="img/tea-6069409_640.jpg" alt="obrazok 1" />
      </div>
      <div class="slide">
        <img src="img/tea-leaf-1797125_640.jpg" alt="obrazok 2" />
      </div>
      <div class="slide">
        <img src="img/white-tea-3801506_640.jpg" alt="obrazok 3" />
      </div>
    </div>
    <div class="infocaj">
      <p class="link">Link k informáciám o čaji:</p>
      <a
        href="https://sk.wikipedia.org/wiki/%C4%8Caj"
        target="_blank"
        class="info-button"
      >
        Wikipédia Čaj
      </a>
    </div>
    <div id="cookie-banner">
      Táto stránka používa cookies.
      <button id="cookie-accept">Rozumiem</button>
    </div>
    <?php require __DIR__ . '/oddelenie/footer.php'; ?>
<?php require __DIR__ . '/oddelenie/script.php'; ?>
  </body>
</html>
