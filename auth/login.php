<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
session_start();

$login = $_POST['login'];
$password = $_POST['password'];

$userQuery = $pdo->prepare("SELECT * FROM users WHERE login = ?");
$userQuery->execute([$login]);
$user = $userQuery->fetch(PDO::FETCH_ASSOC);

if (!$user || $user['password'] != $password) {
    header('Location: /login.php');
}else{
    header('Location: /admin/ ');
}
$SESSION['admin'] = $login;