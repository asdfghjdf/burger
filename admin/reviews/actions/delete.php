<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->prepare("DELETE FROM `reviews` WHERE id = ?");
$stmt->execute([$_GET['id'] ?? '']);


header('Location: /admin/reviews/');
