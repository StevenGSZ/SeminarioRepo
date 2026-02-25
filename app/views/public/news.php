<?php require __DIR__ . '/../layout/header.php'; ?>

<h1>Noticias del Seminario</h1>

<?php foreach ($news as $n): ?>
    <h3><?= htmlspecialchars($n['Title']) ?></h3>
    <p><?= htmlspecialchars($n['Description']) ?></p>

    <?php if ($n['UrlImg']): ?>
        <img src="<?= htmlspecialchars($n['UrlImg']) ?>" width="300">
    <?php endif; ?>

    <hr>
<?php endforeach; ?>

<?php require __DIR__ . '/../layout/footer.php'; ?>