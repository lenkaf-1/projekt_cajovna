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
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img
              src="img/11580448.jpg"
              alt="Logo"
              width="50"
              height="50"
              class="d-inline-block align-text-top"
            />
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
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarNav"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" href="index.html">DOMOV</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="ponuka.html"
                  >HLAVNÁ PONUKA</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="kontakt.html">KONTAKT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="o_nas.html">O NÁS</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

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

    <footer>
      <div class="footer-info">
        <p class="prvycopy">© 2025 Lenka Filipová. Všetky práva vyhradené.</p>
        <p class="druhycopy">Stránka bola vytvorená na edukačné využitie.</p>
        <div class="otvaracie-hodiny">
          <p>Adresa: Hlavné námestie 5, 811 01 Bratislava, Slovensko</p>
        </div>

        <nav>
          <a href="o_nas.html">O nás</a> | <a href="kontakt.html">Kontakt</a> |
          <a href="ponuka.html">Ponuka</a>
        </nav>
      </div>
    </footer>
    <script src="js/app.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
