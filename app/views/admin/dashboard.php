<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Publicación - Capibaras F.C.</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/seminario/app/views/public/css/dashboard.css">

</head>

<body>
    <div class="container">
        <div class="row g-4">
            <!-- Columna del formulario -->
            <div class="col-md-7">
                <div class="card form-card">
                    <h5 class="section-title">
                        <i class="far fa-edit me-2"></i>Crear nueva publicación
                    </h5>

                    <form id="postForm">
                        <!-- Título -->
                        <div class="mb-4">
                            <label for="title" class="form-label">Título</label>
                            <input type="text" class="form-control" id="title"
                                placeholder="Ej: Capibaras F.C. se corona campeón..." autocomplete="off">
                        </div>

                        <!-- Descripción -->
                        <div class="mb-4">
                            <label for="description" class="form-label">Descripción</label>
                            <textarea class="form-control" id="description" rows="3"
                                placeholder="Contenido de la noticia..."></textarea>
                        </div>

                        <!-- Categoría y Autor en fila -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="category" class="form-label">Categoría</label>
                                <input type="text" class="form-control" id="category" placeholder="Ej: DEPORTES"
                                    autocomplete="off">
                            </div>
                            <div class="col-md-6">
                                <label for="author" class="form-label">Autor</label>
                                <input type="text" class="form-control" id="author" placeholder="Ej: Carlos Hernández"
                                    autocomplete="off">
                            </div>
                        </div>

                        <!-- Fecha (nuevo campo) -->
                        <div class="mb-4">
                            <label for="date" class="form-label">Fecha</label>
                            <input type="text" class="form-control" id="date" placeholder="Ej: 5 de marzo, 2024"
                                autocomplete="off">
                        </div>

                        <!-- Imagen -->
                        <div class="mb-4">
                            <label class="form-label">Imagen de portada</label>
                            <div class="image-upload-area" onclick="document.getElementById('imageInput').click()">
                                <i class="far fa-image"></i>
                                <p>Haz clic para seleccionar una imagen</p>
                                <p style="font-size: 0.8rem; margin-top: 8px;">PNG, JPG o GIF (max. 5MB)</p>
                                <input type="file" id="imageInput" accept="image/*" style="display: none;"
                                    onchange="previewImage(this)">
                            </div>
                            <div id="imagePreviewContainer" class="preview-image-container" style="display: none;" hidden>
                                <img id="preview-img" src="#" alt="Vista previa">
                            </div>
                        </div>

                        <hr>

                        <button type="button" class="btn-submit" onclick="publicar()">
                            <i class="far fa-paper-plane me-2"></i>Publicar
                        </button>
                    </form>
                </div>
            </div>

            <!-- Columna de previsualización -->
            <div class="col-md-5">
                <div class="card preview-card">
                    <h5 class="section-title">
                        <i class="far fa-eye me-2"></i>Vista previa
                    </h5>

                    <!-- ========== NUEVA PREVISUALIZACIÓN COMO LA IMAGEN ========== -->
                    <div class="post-preview">
                        <!-- CATEGORÍA -->
                        <div class="preview-category-badge" id="previewCategory">DEPORTES</div>
                        
                        <!-- IMAGEN -->
                        <div id="previewImageArea">
                            <div class="placeholder-image">
                                <i class="far fa-image me-2"></i>Sin imagen
                            </div>
                        </div>

                        <!-- FECHA Y AUTOR -->
                        <div class="preview-meta">
                            <span class="preview-date" id="previewDate">
                                <i class="far fa-calendar"></i>&nbsp;5 de marzo, 2024</span>
                            <span class="preview-author">
                                <i class="far fa-user-circle"></i>
                                <span id="previewAuthor">Carlos Hernández</span>
                            </span>
                        </div>

                        <!-- TÍTULO -->
                        <h1 class="preview-title" id="previewTitle">Capibaras F.C. se corona campeón del Torneo Papa
                            Francisco</h1>

                        <!-- DESCRIPCIÓN -->
                        <div class="preview-description" id="previewDescription">
                            En un emocionante encuentro final, el equipo Capibaras F.C. derrotó 3-2 a los Leones del
                            Seminario, llevándose el campeonato 2024.
                        </div>

                        <!-- LEER MÁS -->
                        <a href="#" class="preview-read-more" style="margin-top: 16px; display: inline-block;">
                            Leer más <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <!-- ========== FIN NUEVA PREVISUALIZACIÓN ========== -->

                    <div style="background-color: #fafbfc; border-radius: 12px; padding: 12px; margin-top: 12px;">
                        <p style="font-size: 0.85rem; color: #6c757d; margin-bottom: 0;">
                            <i class="far fa-info-circle me-1"></i>
                            Así se verá tu publicación antes de publicarla
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/seminario/app/views/public/js/dashboard.js"></script>
</body>

</html>