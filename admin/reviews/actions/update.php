<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';


$stmt = $pdo->prepare ("UPDATE `reviews` SET
`text` = :text,
 `author` = :author,
  `estimation` = :estimation
   WHERE id = :id");
   $stmt->execute([
    'text' => $_POST['text'],
    'author' => $_POST['author'],
    'estimation' => $_POST['estimation'],
    'id' => $_POST['id']
   ]);
   
header('Location: /admin/reviews/');
