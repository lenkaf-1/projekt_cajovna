<div>
  <h1 class="nasaponuka">Naša ponuka čajov</h1>
</div>

<div class="ponukapozadie">
  <h2 class="ponukatext">Čaje podľa kategórií</h2>
</div>

<div class="products">

  <?php foreach ($products as $product): ?>

    <div class="product-card">

      <img class="product-img" src="<?= $product->getImage(); ?>" alt="<?= $product->getName(); ?>">

      <h2><?= $product->getName(); ?></h2>

      <p class="price">
        <?= number_format($product->getPrice(), 2); ?> €
      </p>

      <a href="?route=add_to_cart&id=<?= $product->getId(); ?>" class="btn">
        Pridať do košíka
      </a>

    </div>

  <?php endforeach; ?>

</div>

<div class="tabulka">

  <table class="pekna-tabulka">

    <tr>
      <th>Názov</th>
      <th>Hmotnosť</th>
      <th>Cena</th>
    </tr>

    <?php foreach ($products as $product): ?>
      <tr>
        <td><?= $product->getName(); ?></td>
        <td>100g</td>
        <td><?= number_format($product->getPrice(), 2); ?> €</td>
      </tr>
    <?php endforeach; ?>

  </table>

</div>

<div id="cookie-banner">
  Táto stránka používa cookies.
  <button id="cookie-accept">Rozumiem</button>
</div>