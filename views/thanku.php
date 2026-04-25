<div class="thanku">
  <h1>Ďakujeme za vašu správu!</h1>
  <?php if (!empty($contactData) && $contactData['meno'] && $contactData['email'] && $contactData['sprava']): ?>
    <p>Prijali sme vašu správu. Skontrolujte nasledujúce údaje:</p>
    <div class="contact-summary">
      <p><strong>Meno:</strong> <?= $contactData['meno']; ?></p>
      <p><strong>Email:</strong> <?= $contactData['email']; ?></p>
      <p><strong>Správa:</strong><br><?= $contactData['sprava']; ?></p>
    </div>
    <p>Ozveme sa vám čo najskôr.</p>
  <?php else: ?>
    <p>Vaša správa bola úspešne odoslaná. Ozveme sa vám čo najskôr.</p>
  <?php endif; ?>
  <a href="index.php?route=domov" class="button">Späť na domovskú stránku</a>
</div>