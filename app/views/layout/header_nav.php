<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/seminario/app/views/public/css/mainStyles.css">
    <title>Seminario Mayor Pio XII</title>
</head>
<body>
    <!-- Header y navegación -->
    <div class="container-fluid menuContiner2">
        <div class="container mainMenu">
            <nav class="navbar navbar-expand-lg mainMenu2">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold" href="/seminario/access/">
                        <img src="/seminario/app/views/public/img/logo.jpeg" alt="" width="60">
                    </a>
                    <button id="btnNav" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Alternar navegación" onclick="btnExpandir(this)">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNavbar">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/seminario/access/">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="quienesSomosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ¿Quiénes somos?
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="quienesSomosDropdown">
                                    <li><a class="dropdown-item" href="#fin-naturaleza">Fin y naturaleza</a></li>
                                    <li><a class="dropdown-item" href="#palabras-rector">Palabras del Rector</a></li>
                                    <li><a class="dropdown-item" href="#equipo-formador">Equipo Formador</a></li>
                                    <li><a class="dropdown-item" href="#seminaristas">Seminaristas</a></li>
                                    <li><a class="dropdown-item" href="#instalaciones">Instalaciones</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/seminario/access/#historia">Historia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/seminario/access/news">Noticias</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/seminario/access/resources" id="recursosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Recursos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="recursosDropdown">
                                    <li><a class="dropdown-item" href="#documentos">Documentos</a></li>
                                    <li><a class="dropdown-item" href="#enlaces">Enlaces</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="formacionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Formación
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="formacionDropdown">
                                    <li><a class="dropdown-item" href="#articulos">Artículos</a></li>
                                    <li><a class="dropdown-item" href="#meditaciones">Meditaciones</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="ayudanosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ayúdanos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="ayudanosDropdown">
                                    <li><a class="dropdown-item" href="#amigos-seminario">Amigos del Seminario</a></li>
                                    <li><a class="dropdown-item" href="#contactos">Contactos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <!-- Hero Section -->
        <div class="container hero-section">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="hero-title">Noticias del Seminario</h1>
                    <p class="hero-subtitle">Mantente informado sobre las últimas actividades, eventos y acontecimientos de nuestra comunidad formativa</p>
                </div>
            </div>
        </div>
    </div>