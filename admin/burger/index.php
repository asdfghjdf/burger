<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$burgers = $pdo->query("SELECT * FROM burger")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бургеры</title>
</head>
<body>
    <h1>Бургеры</h1>
    <a href="/admin/" class="button-style">Назад</a>
    <a href="/admin/burger/create.php" class="button-style">Добавить</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Цена</th>
                <th>Фото</th>
                <th>Опубликовано</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
<?php foreach($burgers as $burger):?>
    <tr>
        <td><?= $burger['id']?></td>
        <td><?= $burger['name']?></td>
        <td><?= $burger['description']?></td>
        <td><?= $burger['price']?></td>
        <td><?= $burger['image']?></td>
        <td><?= $burger['is_display']?></td>
        <td><a href="/admin/burger/edit.php?id=<?= $burger['id'] ?> ">Редактировать</a></td>
        <td><a href="/admin/burger/actions/delete.php?id=<?= $burger['id'] ?>">Удалить</a></td>
    </tr>
    <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>