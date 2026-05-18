<div class="admin-container">

    <h1>Pridať nový produkt</h1>

    <form action="index.php?route=admin_create_process" method="post">

        <label>Názov produktu</label>
        <input type="text" name="nazov" required>

        <label>Cena (€)</label>
        <input type="number" name="cena" step="0.01" required>

        <label>Obrázok (URL)</label>
        <input type="text" name="obrazok" required>

        <button type="submit" class="admin-add" style="border:none; cursor:pointer;">
            Uložiť produkt
        </button>

    </form>

</div>