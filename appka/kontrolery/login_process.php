<?php

session_start();
require_once __DIR__ . '/../classes/db.php';

$db = (new db())->pripojenie();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$username]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {

    $_SESSION['user'] = [
        'id' => $user['id'],
        'email' => $user['email'],
        'role' => $user['role']
    ];

    header("Location: index.php?route=domov");
    exit;

} else {

    echo "<p>Nesprávne meno alebo heslo.</p>";
    echo "<a href='index.php?route=login'>Späť</a>";
}