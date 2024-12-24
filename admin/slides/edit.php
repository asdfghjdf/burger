<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->prepare("SELECT * FROM slides WHERE id = ?");
$stmt->execute([$_GET['id'] ?? '']);
$slide = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Слайды</title>
</head>
<body>
<form action="/admin/slides/actions/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $slide['id'] ?>">

    <?php if (!is_null($slide['image'])): ?>
        <img src="<?= $slide['image'] ?>" alt="">
    <?php endif; ?>

    <input type="file" name="image">

    <input type="submit">
    <a href="/admin/slides/" class="button-style">Назад</a>
</form>
</body>
</html>