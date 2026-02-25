<?php
require_once __DIR__ . '/../core/Database.php';

class User {

    public static function findByEmail($email) {
        $db = Database::connect();

        $stmt = $db->prepare("SELECT * FROM users WHERE Email = ?");
        $stmt->execute([$email]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($email, $password) {

        $db = Database::connect();
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $db->prepare(
            "INSERT INTO users (Email, Password) VALUES (?, ?)"
        );

        return $stmt->execute([$email, $hash]);
    }
}