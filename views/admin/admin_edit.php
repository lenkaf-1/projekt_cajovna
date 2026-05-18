<div class="admin-container">

    <h1>Admin panel - produkty</h1>

    <a class="admin-add" href="index.php?route=admin_create">
        + Pridať produkt
    </a>

    <?php if (!isset($products) || empty($products)): ?>
        <p>Žiadne produkty v databáze.</p>
    <?php else: ?>

        <table class="admin-table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Názov</th>
                    <th>Cena</th>
                    <th>Obrázok</th>
                    <th>Akcie</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($products as $p): ?>
                    <tr>

                        <td><?= $p->getId(); ?></td>

                        <td><?= htmlspecialchars($p->getName()); ?></td>

                        <td><?= number_format($p->getPrice(), 2); ?> €</td>

                        <td>
                            <?php if ($p->getImage()): ?>
                                <img
                                    src="/projekt_cajovna/<?= $p->getImage(); ?>"
                                    alt="<?= htmlspecialchars($p->getName()); ?>"
                                    style="width:60px; height:auto; border-radius:6px;"
                                >
                            <?php else: ?>
                                -
                            <?php endif; ?>
                        </td>

                        <td>

                            <a class="btn btn-edit"
                               href="index.php?route=admin_edit&id=<?= $p->getId(); ?>">
                                Upraviť
                            </a>

                            <a class="btn btn-delete"
                               href="index.php?route=admin_delete&id=<?= $p->getId(); ?>"
                               onclick="return confirm('Naozaj chceš vymazať tento produkt?');">
                                Zmazať
                            </a>

                        </td>

                    </tr>
                <?php endforeach; ?>

            </tbody>

        </table>

    <?php endif; ?>

</div>