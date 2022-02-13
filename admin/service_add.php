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
    <link rel="stylesheet" href="styles/css/post_add.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="scripts/script.js" defer></script>
    <title>Добавить услугу | Администратор</title>
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
            <a href="service_add.php" class="add-new"><img src="img/icons/plus_active.png" alt="add-new"></a>
        </div>
        <a href="index.php" class="logout">Выход</a>
    </nav>

    <div class="container">
        <div class="wrapper">
            <h1 class="page-title">Добавление услуги</h1>
            <form class="form" action='' method='post' enctype="multipart/form-data">
                <div class="form__item">
                    <label for="title">Заголовок</label>
                    <input type="text" name="c_title" id="title" required>
                </div>
                <div class="form__item">
                    <label for="background">Изображение на баннере</label>
                    <input type="file" name="file" id="background"></input>
                </div>
                <div class="form__item submit">
                    <input type="submit" name="submit" id="submit" value="Сохранить"></input>
                </div>
            </form>
            <?php
            echo $_SESSION['error'];
            echo $_SESSION['success'];
            ?>
        </div>  
    </div>
</body>
</html>
<?php
}
?>