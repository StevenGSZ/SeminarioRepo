// Elementos del formulario
const titleInput = document.getElementById('title');
const descriptionInput = document.getElementById('description');
const categoryInput = document.getElementById('category');
const authorInput = document.getElementById('author');
const dateInput = document.getElementById('date');

// Elementos de previsualización
const previewTitle = document.getElementById('previewTitle');
const previewDescription = document.getElementById('previewDescription');
const previewCategory = document.getElementById('previewCategory');
const previewAuthor = document.getElementById('previewAuthor');
const previewDate = document.getElementById('previewDate');

// Función para actualizar la previsualización en tiempo real
function actualizarPreview() {
    // Título
    previewTitle.textContent = titleInput.value.trim() || 'Capibaras F.C. se corona campeón del Torneo Papa Francisco';

    // Descripción
    previewDescription.textContent = descriptionInput.value.trim() || 'En un emocionante encuentro final, el equipo Capibaras F.C. derrotó 3-2 a los Leones del Seminario, llevándose el campeonato 2024.';

    // Categoría
    previewCategory.textContent = categoryInput.value.trim() || 'DEPORTES';

    // Autor
    previewAuthor.textContent = authorInput.value.trim() || 'Carlos Hernández';

    // Fecha
    previewDate.textContent = dateInput.value.trim() || '5 de marzo, 2024';
}

// Escuchar cambios en los inputs
titleInput.addEventListener('input', actualizarPreview);
descriptionInput.addEventListener('input', actualizarPreview);
categoryInput.addEventListener('input', actualizarPreview);
authorInput.addEventListener('input', actualizarPreview);
dateInput.addEventListener('input', actualizarPreview);

// Función para previsualizar la imagen
function previewImage(input) {
    const previewContainer = document.getElementById('imagePreviewContainer');
    const previewImg = document.getElementById('preview-img');
    const previewImageArea = document.getElementById('previewImageArea');

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            // Mostrar en el formulario
            previewContainer.style.display = 'block';
            previewImg.src = e.target.result;

            // Mostrar en la previsualización
            previewImageArea.innerHTML = `<img src="${e.target.result}" id="preview-img" style="width: 100%; max-height: 300px; object-fit: cover; border-radius: 16px;">`;
        }

        reader.readAsDataURL(input.files[0]);
    }
}

// Función para simular la publicación
function publicar() {
    const titulo = titleInput.value.trim() || 'Sin título';
    const categoria = categoryInput.value.trim() || 'Sin categoría';
    const autor = authorInput.value.trim() || 'Anónimo';
    const fecha = dateInput.value.trim() || 'Fecha no especificada';

    alert(`✅ Publicación lista!\n\nTítulo: ${titulo}\nCategoría: ${categoria}\nAutor: ${autor}\nFecha: ${fecha}\n\n(Simulación - no se envió a ningún servidor)`);
}