<?php require __DIR__ . '/../layout/header.php'; ?>

<!-- Página de Noticias -->
<main class="noticias-page">
    <div class="container">
        <!-- Encabezado de la página -->
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="page-title">Todas las noticias</h1>
                <p class="page-description">Aquí encontrarás información actualizada sobre la vida del Seminario,
                    eventos especiales, actividades formativas y pastorales.</p>
            </div>
        </div>

        <!-- Grid de noticias -->
        <div class="row g-4 news-grid">
            <!-- aca debe ir el foreach -->
            <div class="col-lg-4 col-md-6 news-item" data-date="2024-03-15" data-year="2024">
                <article class="news-card">
                    <div class="news-card-image">
                        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Retiro espiritual" class="img-fluid">
                        <span class="news-category">Espiritualidad</span>
                    </div>
                    <div class="news-card-content">
                        <div class="news-meta">
                            <span class="news-date"><i class="far fa-calendar-alt me-2"></i>15 de marzo, 2024</span>
                            <span class="news-author"><i class="far fa-user me-2"></i>P. Eduardo Chávez</span>
                        </div>
                        <h3 class="news-card-title">
                            <a href="#">Seminaristas participan en retiro espiritual de Cuaresma</a>
                        </h3>
                        <p class="news-card-excerpt">
                            Durante tres días, la comunidad del Seminario se sumergió en un profundo ambiente de
                            oración y reflexión, preparando sus corazones para la Semana Santa.
                        </p>
                        <a href="#" class="btn-read-more">Leer más <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6 news-item">
                <article class="news-card">
                    <div class="news-card-image">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Jornada vocacional" class="img-fluid">
                        <span class="news-category">Vocaciones</span>
                    </div>
                    <div class="news-card-content">
                        <div class="news-meta">
                            <span class="news-date"><i class="far fa-calendar-alt me-2"></i>10 de marzo, 2024</span>
                            <span class="news-author"><i class="far fa-user me-2"></i>Diác. José Martínez</span>
                        </div>
                        <h3 class="news-card-title">
                            <a href="#">Jornada vocacional reúne a jóvenes de la diócesis</a>
                        </h3>
                        <p class="news-card-excerpt">
                            Más de 50 jóvenes participaron en la jornada "¿Qué dices de ti mismo?", un espacio de
                            discernimiento y encuentro con la vocación sacerdotal.
                        </p>
                        <a href="#" class="btn-read-more">Leer más <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6 news-item">
                <article class="news-card">
                    <div class="news-card-image">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Capibaras F.C. campeón" class="img-fluid">
                        <span class="news-category">Deportes</span>
                    </div>
                    <div class="news-card-content">
                        <div class="news-meta">
                            <span class="news-date"><i class="far fa-calendar-alt me-2"></i>5 de marzo, 2024</span>
                            <span class="news-author"><i class="far fa-user me-2"></i>Sem. Carlos Hernández</span>
                        </div>
                        <h3 class="news-card-title">
                            <a href="#">Capibaras F.C. se corona campeón del Torneo Papa Francisco</a>
                        </h3>
                        <p class="news-card-excerpt">
                            En un emocionante encuentro final, el equipo Capibaras F.C. derrotó 3-2 a los Leones del
                            Seminario, llevándose el campeonato 2024.
                        </p>
                        <a href="#" class="btn-read-more">Leer más <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </article>
            </div>

            <!-- Noticia 4 -->
            <div class="col-lg-4 col-md-6 news-item" data-date="2024-02-28" data-year="2024">
                <article class="news-card">
                    <div class="news-card-image">
                        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Ordenaciones diaconales" class="img-fluid">
                        <span class="news-category">Ordenaciones</span>
                    </div>
                    <div class="news-card-content">
                        <div class="news-meta">
                            <span class="news-date"><i class="far fa-calendar-alt me-2"></i>28 de febrero,
                                2024</span>
                            <span class="news-author"><i class="far fa-user me-2"></i>Oficina de
                                Comunicaciones</span>
                        </div>
                        <h3 class="news-card-title">
                            <a href="#">Cinco seminaristas reciben el orden del diaconado</a>
                        </h3>
                        <p class="news-card-excerpt">
                            En una solemne ceremonia presidida por el Obispo diocesano, cinco hermanos nuestros
                            dieron un paso más en su camino hacia el sacerdocio.
                        </p>
                        <a href="#" class="btn-read-more">Leer más <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </article>
            </div>
        </div>

    </div>
</main>

<?php require __DIR__ . '/../layout/footer.php'; ?>