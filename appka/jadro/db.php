<?php

class db {

    protected function pripojenie() {
        try {
            $username = "root";
            $password = "";
            $db = new PDO(
                "mysql:host=localhost;dbname=databaza;",
                $username,
                $password
            );
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo "Spojenie zlyhalo: " . $e->getMessage();
            exit();
        }
    }
}