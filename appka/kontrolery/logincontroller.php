<?php

class LoginController {

    public function login() {

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $correctUser = "admin";
        $correctPass = "tajneheslo";

        if ($username === $correctUser && $password === $correctPass) {

            $_SESSION['user'] = $username;

            header("Location: index.php?route=domov");
            exit;

        } else {

            echo "<div class='login-error'>Nesprávne meno alebo heslo.</div>";
            echo "<a class='login-back' href='index.php?route=login'>Späť</a>";

        }
    }

    public function logout() {

        session_destroy();

        header("Location: index.php?route=domov");
        exit;
    }
}
