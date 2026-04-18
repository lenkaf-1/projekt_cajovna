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
    <?php require __DIR__ . '/views/header.php'; ?>

    <div>
      <h1 class="nasaponuka">Naša ponuka čajov</h1>
    </div>

    <div class="ponukapozadie">
      <h2 class="ponukatext">Čaje podľa kategórií</h2>
    </div>

    <div class="obrazkyzel">
      <img
        src="img/ponukazelenycaj1.jpg"
        class="img-fluid"
        alt="zeleny caj cislo1"
      />
      <img src="img/zelenycaj2.jpg" class="img-fluid" alt="zeleny caj cislo2" />
      <img
        src="img/zelenycaj 3.jpg"
        class="img-fluid"
        alt="zeleny caj cislo3"
      />
    </div>

    <div class="zelenecaje">
      <h2 class="popisokzel">Zelené čaje</h2>
    </div>

    <div class="obrazkyzel">
      <img src="img/whitetea1.jpg" class="img-fluid" alt="biely caj cislo1" />
      <img src="img/wite2.jpg" class="img-fluid" alt="biely caj cislo2" />
      <img src="img/white3.jpg" class="img-fluid" alt="biely caj cislo3" />
    </div>

    <div class="zelenecaje">
      <h2 class="popisokzel">Biele čaje</h2>
    </div>

    <div class="obrazkyzel">
      <img src="img/black1.jpg" class="img-fluid" alt="cierny caj cislo1" />
      <img src="img/black2.jpg" class="img-fluid" alt="cierny caj cislo2" />
      <img src="img/black3.jpg" class="img-fluid" alt="cierny caj cislo3" />
    </div>

    <div class="zelenecaje">
      <h2 class="popisokzel">Čierne čaje</h2>
    </div>
    <div class="tabulka">
      <table class="pekna-tabulka">
        <tr>
          <th>Názov</th>
          <th>Hmotnosť</th>
          <th>Cena</th>
        </tr>
        <tr>
          <td>Zelený čaj</td>
          <td>100g</td>
          <td>4,50 €</td>
        </tr>
        <tr>
          <td>Biely čaj</td>
          <td>100g</td>
          <td>5,20 €</td>
        </tr>
        <tr>
          <td>Čierny čaj</td>
          <td>100g</td>
          <td>3,80 €</td>
        </tr>
      </table>
    </div>

    <div id="cookie-banner">
      Táto stránka používa cookies.
      <button id="cookie-accept">Rozumiem</button>
    </div>
<?php require __DIR__ . '/views/footer.php'; ?>
<?php require __DIR__ . '/oddelenie/script.php'; ?>
  </body>
</html>
