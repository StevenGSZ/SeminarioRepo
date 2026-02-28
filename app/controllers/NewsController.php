<?php
require_once __DIR__ . '/../models/News.php';

class NewsController {
    
    public function dashboard() {

        if (!isset($_SESSION['user'])) {
            header("Location: /seminario/access/admin");
            exit;
        }

        $news = News::getAll();

        require __DIR__ . '/../views/admin/dashboard.php';
    }

    public function create() {

        if (!isset($_SESSION['user'])) {
            header("Location: /seminario/access/admin");
            exit;
        }

        $title = $_POST['title'] ?? '';
        $desc  = $_POST['description'] ?? '';
        $category  = $_POST['category'] ?? '';
        $location  = $_POST['location'] ?? '';

        $imagePath = null;
        
        if (!empty($_FILES['image']['name'])) {

            $uploadDir = __DIR__ . '/../../access/uploads/news/';

            // Crear carpeta si no existe
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Generar nombre único
            $fileName = time() . '_' . basename($_FILES['image']['name']);

            $targetPath = $uploadDir . $fileName;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {

                // Ruta que se guardará en la DB
                $imagePath = '/seminario/access/uploads/news/' . $fileName;
            }
        }

        News::create($title, $desc, $category, $location, $imagePath);

        header("Location: /seminario/access/dashboard");
        exit;
    }
}