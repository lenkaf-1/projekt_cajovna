<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$base = "/projekt_cajovna/";

$total = 0;
foreach ($cartItems ?? [] as $item) {
    $total += $item['product']->getPrice() * $item['quantity'];
}
?>

<div class="cart-container">

    <h1 class="cart-title">Váš košík</h1>

    <?php if (empty($cartItems)): ?>
        <p>Váš košík je prázdny.</p>
    <?php else: ?>

        <div class="cart-items">

            <?php foreach ($cartItems as $item): ?>

                <div class="cart-item">

                    <img
                        src="<?= $base . $item['product']->getImage(); ?>"
                        alt="<?= htmlspecialchars($item['product']->getName()); ?>"
                        class="cart-img"
                    >

                    <div class="cart-details">

                        <h2><?= htmlspecialchars($item['product']->getName()); ?></h2>

                        <p>
                            Cena:
                            <?= number_format($item['product']->getPrice(), 2); ?> €
                        </p>

                        <p>
                            Množstvo:
                            <?= $item['quantity']; ?>
                        </p>

                        <p>
                            Celkom:
                            <?= number_format(
                                $item['product']->getPrice() * $item['quantity'],
                                2
                            ); ?> €
                        </p>

                        <form action="index.php?route=remove_from_cart" method="post">

                            <input
                                type="hidden"
                                name="product_id"
                                value="<?= $item['product']->getId(); ?>"
                            >

                            <button type="submit" class="remove-btn">
                                Odobrať
                            </button>

                        </form>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

        <div class="cart-total">

            <h3>
                Celková suma:
                <?= number_format($total, 2); ?> €
            </h3>

        </div>

        <div class="order-form">

            <h2>Objednať</h2>

            <form action="index.php?route=order" method="post">

                <label>Meno:</label>
                <input type="text" name="name" required>

                <label>Email:</label>
                <input type="email" name="email" required>

                <label>Telefón:</label>
                <input type="tel" name="phone" required>

                <label>Adresa:</label>
                <textarea name="address" required></textarea>

                <button type="submit" class="order-btn">
                    Objednať
                </button>

            </form>

        </div>

    <?php endif; ?>

</div>