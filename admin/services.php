<!DOCTYPE html>
<html lang="en">
<?php
include("../core/database.php");
error_reporting(0);
session_start();
if(empty($_SESSION["adm_id"]))
{
	header('location:index.php');
}
else
{
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css/allposts.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="scripts/script.js" defer></script>
    <script src="scripts/options.js" defer></script>
    <title>Услуги | Администратор</title>
</head>
<body>
    <header class="header">
        <div class="header__logo">
            <h1>Администратор</h1>
        </div>
        <div class="menu">
            <div class="line"></div>
        </div>
        <div class="page-title">Главная</div>
        <div class="header__authorization">
            <div class="user">
                <p class="username">admin</p>
            </div>
            <a href="index.php" class="logout">Выход</a>
        </div>
    </header>

    <nav class="navbar">
        <div class="navbar__item">
            <div class="icon"><img src="img/icons/home.png" alt="homepage-icon"></div>
            <a href="dashboard.php">Главная</a>
        </div>
        <div class="navbar__item">
            <div class="icon"><img src="img/icons/requests.png" alt="requests-icon"></div>
            <a href="requests.php">Заявки</a>
        </div>
        <div class="navbar__item active">
            <div class="icon"><img src="img/icons/services.png" alt="requests-icon"></div>
            <a href="services.php">Услуги</a>
            <a href="service_add.php" class="add-new"><img src="img/icons/plus.png" alt="add-new"></a>
        </div>
        <a href="index.php" class="logout">Выход</a>
    </nav>

    <div class="container">
        <div class="wrapper">
            <div class="posts">
                <div class="posts__item">
                    <div class="image">
                        <img src="img/logo.png" alt="image">
                    </div>
                    <div class="content">
                        <a href="service_edit.php?service_id=<?=$service['id'];?>">Заголовок</a>
                    </div>
                    <div class="options">
                        <img src="img/icons/options.png" alt="options">
                        <div class="click-handler">
                            <div class="options-list">
                                <div class="option add-image">
                                    <div class="icon"><img src="img/icons/plus.png" alt="icon"></div>
                                    <a href="block_add.php">Добавить блок</a>
                                </div>
                                <div class="option edit">
                                    <div class="icon"><img src="img/icons/edit.png" alt="icon"></div>
                                    <a href="service_edit.php?service_id=<?=$service['id'];?>">Редактировать</a>
                                </div>
                                <div class="option delete">
                                    <div class="icon"><img src="img/icons/delete.png" alt="icon"></div>
                                    <a href="service_del.php?del_service=<?=$service['id'];?>">Удалить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
?>