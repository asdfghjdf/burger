<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Слайды</title>
</head>
<body>

<form action="/admin/slides/actions/store.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">
    <a href="/admin/slides/" class="button-style">Назад</a>
</form>
</body>
</html>