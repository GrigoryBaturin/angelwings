<?php
    require_once './db_connect_php/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Admin Panel</title>
</head>
<body>
    <div class="containerForm">
        <div class="form">
            <h1>Авторизация</h1>
            <form action="action.php" method="post">
                <div class="login">
                    <label for="login">Логин</label>
                    <input type="text" id="login" name="login" placeholder="Введите логин">
                </div>
                
                <div class="password">
                    <label for="password">Пароль</label>
                    <input type="text" id="password" name="password" placeholder="Введите пароль">
                </div>

                <div>
                    <button class="button" type="submit">Авторизоваться</button>
                </div>
                
                
            </form>
        </div>
    </div>    
<script src="./scripts/auth.js"></script>    
</body>
</html>