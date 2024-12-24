<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->query("SELECT * FROM slides");
$slides = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Слайды</title>
</head>
<body>
<h1>Слайды</h1>
<a href="/admin/" class="button-style">Назад</a>
<a href="/admin/slides/create.php" class="button-style">Добавить</a>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Фото</th>
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($slides as $slide):?>
        <tr>
            <td><?= $slide['id']?></td>
            <td><?= $slide['image']?></td>
            <td><a href="/admin/slides/edit.php?id=<?= $slide['id'] ?> ">Редактировать</a></td>
            <td><a href="/admin/slides/actions/delete.php?id=<?= $slide['id'] ?>">Удалить</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>



