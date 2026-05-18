<?php

session_start();

require_once 'jadro/db.php';

$dbClass = new db();
$conn = $dbClass->pripojenie();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $meno = $_POST['name'];
    $email = $_POST['email'];
    $telefon = $_POST['phone'];
    $adresa = $_POST['address'];

    $cartItems = $_SESSION['cart'];

    $total = 0;

    foreach ($cartItems as $item) {
        $total += $item['product']->getPrice() * $item['quantity'];
    }

    $stmt = $conn->prepare("
        INSERT INTO objednavky
        (meno, email, telefon, adresa, celkova_suma)
        VALUES (?, ?, ?, ?, ?)
    ");

    $stmt->execute([
        $meno,
        $email,
        $telefon,
        $adresa,
        $total
    ]);

    $orderId = $conn->lastInsertId();

    foreach ($cartItems as $item) {

        $stmt = $conn->prepare("
            INSERT INTO objednavka_produkty
            (objednavka_id, produkt_id, mnozstvo, cena)
            VALUES (?, ?, ?, ?)
        ");

        $stmt->execute([
            $orderId,
            $item['product']->getId(),
            $item['quantity'],
            $item['product']->getPrice()
        ]);
    }

    unset($_SESSION['cart']);

    header("Location: index.php?route=cart&success=1");
    exit();
}