<?php
$meno = $_POST['meno'] ?? '';
$email = $_POST['email'] ?? '';
$sprava = $_POST['sprava'] ?? '';
$gdpr = isset($_POST['gdpr']) ? 'Áno' : 'Nie';
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ďakujeme</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="thankubody">

<div class="thanku">
    <h1>Ďakujeme za správu!</h1>

    <p><strong>Meno:</strong> <?= htmlspecialchars($meno) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
    <p><strong>Správa:</strong> <?= nl2br(htmlspecialchars($sprava)) ?></p>
    <p><strong>GDPR súhlas:</strong> <?= $gdpr ?></p>

    <a href="index.php" id="naspat">Späť na hlavnú stránku</a>
</div>

</body>
</html>