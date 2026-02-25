<?php

require_once __DIR__ . '/../controllers/AuthController.php';
require_once __DIR__ . '/../controllers/NewsController.php';
require_once __DIR__ . '/../controllers/HomeController.php';

$basePath = '/seminario/access';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (strpos($uri, $basePath) === 0) {
    $uri = substr($uri, strlen($basePath));
}

if ($uri === '' || $uri === false) {
    $uri = '/';
}

$auth = new AuthController();
$news = new NewsController();
$home = new HomeController();

switch ($uri) {

    case '/':
        $home->home();
        break;

    case '/news':
        $home->news();
        break;

    case '/resources':
        $home->resources();
        break;

    case '/training':
        $home->training();
        break;

    // Login form
    case '/admin':
        $auth->loginForm();
        break;

    // Procesar login
    case '/admin/login':
        $auth->login();
        break;

    // Logout
    case '/admin/logout':
        $auth->logout();
        break;

    case '/dashboard':
        $news->dashboard();
        break;

    case '/news/create':
        $news->create();
        break;

    default:
        http_response_code(404);
        echo "404 - Página no encontrada";
}