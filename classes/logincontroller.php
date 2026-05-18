<?php

require_once __DIR__ . '/../classes/Database.php';

class LoginController
{
    private function db()
    {
        return (new Database())->getConnection();
    }

    private function startSession()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function login()
    {
        $this->startSession();

        $username = trim($_POST['username'] ?? '');
        $password = trim($_POST['password'] ?? '');

        if ($username === '' || $password === '') {
            echo "Vyplň všetky polia.";
            return;
        }

        $db = $this->db();

        $stmt = $db->prepare("
            SELECT id, username, password, role
            FROM users
            WHERE username = ?
            LIMIT 1
        ");

        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            echo "Nesprávne meno alebo heslo.";
            return;
        }

        if (!password_verify($password, $user['password'])) {
            echo "Nesprávne meno alebo heslo.";
            return;
        }

        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $user['username'],
            'role' => $user['role']
        ];

        header("Location: index.php?route=domov");
        exit;
    }

    public function logout()
    {
        $this->startSession();
        session_destroy();

        header("Location: index.php?route=domov");
        exit;
    }
}