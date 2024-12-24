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
$is_display = isset($_POST['is_display']) ? 1 : 0;
$stmt = $pdo->prepare ("UPDATE `burger` SET
`name` = :name,
 `description` = :description,
 `price` = :price,
 `is_display` = :is_display,
   `image` = :image
   WHERE id = :id");
   $stmt->execute([
    'name' => $_POST['name'],
    'description' => $_POST['description'],
    'price' => $_POST['price'],
    'is_display' => $is_display,
    'image' => $path,
    'id' => $_POST['id']
   ]);

header('Location: /admin/burger/');
