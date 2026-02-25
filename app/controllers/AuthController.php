<?php
require_once __DIR__ . '/../models/User.php';

class AuthController {

    public function loginForm() {
        require __DIR__ . '/../views/admin/login.php';
    }

    public function login() {

        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = User::findByEmail($email);

        if ($user && password_verify($password, $user['Password'])) {

            $_SESSION['user'] = $user['Email'];

            header("Location: /seminario/access/dashboard");
            exit;
        }

        echo "Credenciales incorrectas";
    }

    public function logout() {
        session_destroy();
        header("Location: /seminario/access/");
        exit;
    }
}