<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$reviews = $pdo->query("SELECT * FROM reviews")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
</head>
<body>
    <h1>Оценка</h1>
    <a href="/admin/" class="button-style">Назад</a>
    <a href="/admin/reviews/create.php" class="button-style">Добавить</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Текст</th>
                <th>Автор</th>
                <th>Оценка</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($reviews as $review): ?>
            <tr>
                <td><?= htmlspecialchars($review['id']) ?></td>
                <td><?= htmlspecialchars($review['text']) ?></td>
                <td><?= htmlspecialchars($review['author']) ?></td>
                <td><?= htmlspecialchars($review['estimation']) ?></td>
                <td><a href="/admin/reviews/edit.php?id=<?= htmlspecialchars($review['id']) ?>">Редактировать</a></td>
                <td><a href="/admin/reviews/actions/delete.php?id=<?= htmlspecialchars($review['id']) ?>">Удалить</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>