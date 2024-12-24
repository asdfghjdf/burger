<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

if (!empty($_FILES['image']['tmp_name'])){
    $path = '/img/slides' . $_FILES['image']['name'];

    move_uploaded_file(
        $_FILES['image']['tmp_name'],
        $_SERVER['DOCUMENT_ROOT'] . $path
    );
} else{
    $path = '';
}

$stmt = $pdo->prepare ("UPDATE `slides` SET
   `image` = :image
   WHERE id = :id");
$stmt->execute([
    'image' => $path,
    'id' => $_POST['id']
]);

header('Location: /admin/slides/');
