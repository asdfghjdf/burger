<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->prepare("SELECT * FROM burger WHERE id = ?");
$stmt->execute([$_GET['id'] ?? '']);
$burger = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бургеры</title>
</head>
<body>
    <form action="/admin/burger/actions/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $burger['id'] ?>">
        <input type="text" name="name" value="<?= $burger['name'] ?>">
        <textarea name="description" placeholder="Описание"><?= $burger['description'] ?></textarea>
        <input type="number" name="price" placeholder="Цена" value="<?= $burger['price'] ?>">

        <?php if (!is_null($burger['image'])): ?>
            <img src="<?= $burger['image'] ?>" alt="">
<?php endif; ?>

        <input type="file" name="image">

        <input type="checkbox" name="is_display" id="is_display" <?= $burger['is_display'] ? 'checked' : '' ?>>
        <label for="is_display">Показывать на главной</label>
        <input type="submit">
        <a href="/admin/" class="button-style">Назад</a>
    </form>
</body>
</html>