<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';


$stmt = $pdo->prepare ("INSERT INTO `reviews`(`text`, `author`, `estimation`)
VALUES (:text, :author, :estimation)");
$stmt->execute([
    'text' => $_POST['text'],
    'author' => $_POST['author'],
    'estimation' => $_POST['estimation'],
]);

header('Location: /admin/reviews/');
