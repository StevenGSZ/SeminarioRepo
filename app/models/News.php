<?php
require_once __DIR__ . '/../core/Database.php';

class News {

    public static function getAll() {

        $db = Database::connect();

        $stmt = $db->query(
            "SELECT * FROM news ORDER BY CreatedAt DESC"
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($title, $description, $category, $location, $urlImg) {

        $db = Database::connect();

        $stmt = $db->prepare(
            "INSERT INTO news (Title, Description, Category, Location, UrlImg)
             VALUES (?, ?, ?, ?, ?)"
        );

        return $stmt->execute([$title, $description, $category, $location, $urlImg]);
    }
}