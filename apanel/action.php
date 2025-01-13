<?php
require_once './db_connect_php/db.php';

$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if(strlen($login) < 2) {
    echo "Пожалуйста, введите логин!";
    exit;
}

if(strlen($password) < 2) {
    echo "Пожалуйста, введите пароль!";
    exit;
}

// $salt = '56s89_)(*&^^&%$^#DFS';
// $password = md5($salt . $password);

$sql = 'SELECT id FROM users WHERE login = ? AND password = ?';
$query = $pdo->prepare($sql);
$query->execute([$login, $password]);

if($query->rowCount() == 0) {
    echo "Такого пользователя не существует!";
} else {
    setcookie('login', $login, time() + 3600 * 24 * 30, "/");
    header('Location: main/index.php');
}


?>