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

    <div class="poz">
      <div class="kontakt-content">
        <h1 class="kontakth1">KONTAKT</h1>
        <h3 class="kontakth3">Máte nejaké otázky?</h3>
      </div>
    </div>

    <div class="kontakt">
      <ul>
        <li>E-mail: <a href="mailto:cajovy@pokoj.com">cajovy@pokoj.com</a></li>
        <li>Telefón: <a href="tel:+421900214567">+421 900 214 567</a></li>
        <li>Adresa: Hlavné námestie 5, 811 01 Bratislava, Slovensko</li>
        <li>Otvorené: Po-Pia 9:00 - 18:00, So-Ne zatvorené</li>
      </ul>
    </div>

    <form class="formular" action="thanku.html" method="get">
      <h2>Kontaktujte nás</h2>
      <input type="text" name="meno" placeholder="Tvoje meno" required />
      <input type="email" name="email" placeholder="Tvoj e-mail" required />
      <textarea
        name="sprava"
        placeholder="Tvoja správa"
        rows="5"
        required
      ></textarea>
      <div class="gdpr">
        <label>
          <input type="checkbox" name="gdpr" required />
          Súhlasím so spracovaním osobných údajov podľa GDPR.
        </label>
      </div>
      <button class="tla1" type="submit">Odoslať</button>
    </form>

    <div id="cookie-banner">
      Táto stránka používa cookies.
      <button id="cookie-accept">Rozumiem</button>
    </div>
<?php require __DIR__ . '/oddelenie/footer.php'; ?>
<?php require __DIR__ . '/oddelenie/script.php'; ?>
  </body>
</html>
