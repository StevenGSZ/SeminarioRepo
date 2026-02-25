<h2>Panel de Noticias</h2>

<a href="/seminario/access/admin/logout">Cerrar sesión</a>

<h3>Nueva noticia</h3>
<form method="POST" action="/seminario/access/news/create" enctype="multipart/form-data">

    <input name="title" placeholder="Título" required>
    <br><br>

    <textarea name="description" placeholder="Descripción"></textarea>
    <br><br>

    <input type="file" name="image">
    <br><br>

    <button>Publicar</button>
</form>

<h3>Noticias</h3>

<?php foreach ($news as $n): ?>
    <h4><?= htmlspecialchars($n['Title']) ?></h4>
    <p><?= htmlspecialchars($n['Description']) ?></p>

    <?php if ($n['UrlImg']): ?>
        <img src="<?= htmlspecialchars($n['UrlImg']) ?>" width="300">
    <?php endif; ?>

    <hr>
<?php endforeach; ?>