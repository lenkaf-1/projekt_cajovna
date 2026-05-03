<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$correctUser = "admin";
$correctPass = "tajneheslo";

if ($username === $correctUser && $password === $correctPass) {
    $_SESSION['user'] = $username;
    header("Location: index.php?route=domov");
    exit;
} else {
    echo "<p>Nesprávne meno alebo heslo.</p>";
    echo "<a href='index.php?route=login'>Späť</a>";
}
