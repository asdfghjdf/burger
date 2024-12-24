<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->prepare("SELECT * FROM reviews WHERE id = ?");
$stmt->execute([$_GET['id'] ?? '']);
$reviews = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
</head>
<body>
    <form action="/admin/reviews/actions/update.php" method="post">
    <input type="hidden" name="id" value="<?= $reviews['id'] ?>">
        <textarea name="text" placeholder="Описание"><?= $reviews['text'] ?></textarea>
        <input type="text" name="author" value="<?= $reviews['author'] ?>">
        <input type="number" name="estimation" placeholder="Оценка" value="<?= $reviews['estimation'] ?>">
        <input type="submit">
    </form>
</body>
</html>