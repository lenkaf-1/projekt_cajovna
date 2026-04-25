<div class="cart-container">
    <h1 class="cart-title">Váš košík</h1>
    <?php if (empty($cartItems)): ?>
        <p>Váš košík je prázdny.</p>
    <?php else: ?>
        <div class="cart-items">
            <?php foreach ($cartItems as $item): ?>
                <div class="cart-item">
                    <img src="<?= $item['product']->getImage(); ?>" alt="<?= $item['product']->getName(); ?>" class="cart-img">
                    <div class="cart-details">
                        <h2><?= $item['product']->getName(); ?></h2>
                        <p>Cena: <?= number_format($item['product']->getPrice(), 2); ?> €</p>
                        <p>Množstvo: <?= $item['quantity']; ?></p>
                        <p>Celkom: <?= number_format($item['product']->getPrice() * $item['quantity'], 2); ?> €</p>
                        <form action="index.php?route=remove_from_cart" method="post" style="display:inline;">
                            <input type="hidden" name="product_id" value="<?= $item['product']->getId(); ?>">
                            <button type="submit" class="remove-btn">Odobrať</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="cart-total">
            <h3>Celková suma:
                <?php
                $total = 0;
                foreach ($cartItems as $item) {
                    $total += $item['product']->getPrice() * $item['quantity'];
                }
                echo number_format($total, 2) . ' €';
                ?>
            </h3>
        </div>

        <div class="order-form">
            <h2>Objednať</h2>
            <form action="index.php?route=order" method="post">
                <label for="name">Meno:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Telefón:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="address">Adresa:</label>
                <textarea id="address" name="address" required></textarea>

                <button type="submit" class="order-btn">Objednať</button>
            </form>
        </div>
    <?php endif; ?>
</div>