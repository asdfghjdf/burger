<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$path = '/img/slides/' . $_FILES['image']['name'];

if (!empty($_FILES['image']['tmp_name'])){
    $path = '/img/slides' . $_FILES['image']['name'];

    move_uploaded_file(
        $_FILES['image']['tmp_name'],
        $_SERVER['DOCUMENT_ROOT'] . $path
    );
} else{
    $path = '';
}


$stmt = $pdo->prepare ("INSERT INTO `slides` (`image`)
VALUES (:image)");
$stmt->execute([
    'image' => $path
]);

header('Location: /admin/slides/');
