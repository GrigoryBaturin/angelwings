<?php
    require_once '../db_connect_php/db.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin Panel</title>
</head>
<body>
    <div class="containerPage">
         <!-- topbar -->
        <header class="topbar">
            <div class="navmenu_burger">
                <span></span>
            </div>
            <div class="dateTime">Сегодня: <?php echo date('d.m.Y'); ?> г.</div>
            <div class="user">Вы вошли как: <span><?php echo $_COOKIE['login']; ?></span></div>
            <div class="exitSession"><a href="#">Завершить сессию</a></div>
        </header>
        <!-- topbar end -->

        <!-- middle -->
        <div class="middle">
            <?php require_once "../php_components/menu.php"; ?>
            <div class="content">
                <h1>Раздел "Список отчетности"</h1>
            </div>
        </div>
        <!-- middle end -->
    </div>    
<script src="../scripts/scripts.js"></script>    
</body>
</html>