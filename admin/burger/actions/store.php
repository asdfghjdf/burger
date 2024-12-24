<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$path = '/img/burger/' . $_FILES['image']['name'];

if (!empty($_FILES['image']['tmp_name'])){
    $path = '/img/burger' . $_FILES['image']['name'];

move_uploaded_file(
$_FILES['image']['tmp_name'],
$_SERVER['DOCUMENT_ROOT'] . $path
);
} else{
    $path = '';
}

$is_display = isset($_POST['is_display']) ? '1' : '0';

$stmt = $pdo->prepare ("INSERT INTO `burger` (`name`, `description`, `price`, `image`, `is_display`)
VALUES (:name, :description, :price, :image, :is_display)");
$stmt->execute([
    'name' => $_POST['name'],
    'description' => $_POST['description'],
    'price' => $_POST['price'],
    'image' => $path,
    'is_display' => $is_display,
]);

header('Location: /admin/burger/');
