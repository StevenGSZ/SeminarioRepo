<?php
require_once __DIR__ . '/../models/News.php';

class HomeController {
    
    public function home() {
        require __DIR__ . '/../views/public/home.php';
    }

    public function news() {
        $news = News::getAll();
        require __DIR__ . '/../views/public/news.php';
    }

    public function resources() {
        require __DIR__ . '/../views/public/resources.php';
    }

    public function training() {
        require __DIR__ . '/../views/public/training.php';
    }
}