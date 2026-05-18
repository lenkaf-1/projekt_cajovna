<div class="admin-container">

    <h1>Upraviť produkt</h1>

    <?php if (!isset($product) || !$product): ?>
        <p>Produkt sa nenašiel.</p>
    <?php else: ?>

        <form class="admin-form" action="index.php?route=admin_update" method="post">

            <input type="hidden" name="id" value="<?= $product->getId(); ?>">

            <label>Názov</label>
            <input type="text" name="nazov"
                   value="<?= htmlspecialchars($product->getName()); ?>"
                   required>

            <label>Cena</label>
            <input type="number" step="0.01" name="cena"
                   value="<?= $product->getPrice(); ?>"
                   required>

            <label>Obrázok (cesta)</label>
            <input type="text" name="obrazok"
                   value="<?= htmlspecialchars($product->getImage()); ?>">

            <?php if ($product->getImage()): ?>
                <div style="margin-top:10px;">
                    <img src="/projekt_cajovna/<?= $product->getImage(); ?>"
                         style="width:120px;border-radius:8px;">
                </div>
            <?php endif; ?>

            <button type="submit" class="btn btn-edit" style="margin-top:15px;">
                Uložiť zmeny
            </button>

        </form>

    <?php endif; ?>

</div>