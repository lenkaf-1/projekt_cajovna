<?php
$meno = $_POST['meno'] ?? '';
$email = $_POST['email'] ?? '';
$sprava = $_POST['sprava'] ?? '';
$gdpr = isset($_POST['gdpr']) ? 'Áno' : 'Nie';
?>

<div class="thanku">
    <h1>Ďakujeme za správu!</h1>

    <p><strong>Meno:</strong> <?= htmlspecialchars($meno) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
    <p><strong>Správa:</strong> <?= nl2br(htmlspecialchars($sprava)) ?></p>
    <p><strong>GDPR súhlas:</strong> <?= $gdpr ?></p>

    <a href="index.php?route=domov" id="naspat">Späť na hlavnú stránku</a>
</div>
