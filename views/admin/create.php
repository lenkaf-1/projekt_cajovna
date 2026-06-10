<div class="admin-container">

    <h1>Pridať nový produkt</h1>

    <form action="index.php?route=admin_create_process" method="post" enctype="multipart/form-data">

        <label>Názov produktu</label>
        <input type="text" name="nazov" required>

        <label>Cena (€)</label>
        <input type="number" name="cena" step="0.01" required>

        <label>Obrázok</label>
        <input type="file" name="obrazok" accept="image/*" required>

        <button type="submit" class="admin-add" style="border:none; cursor:pointer;">
            Uložiť produkt
        </button>

    </form>

</div>