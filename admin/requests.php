<!DOCTYPE html>
<html lang="en">
<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include("../core/database.php");
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявки | Администратор</title>
    <link rel="stylesheet" href="styles/css/requests.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/4f5cd90764.js"></script>
    <script src="scripts/script.js" defer></script>
</head>
<body>
    <header class="header">
        <div class="header__logo">
            <h1>Администратор</h1>
        </div>
        <div class="menu">
            <div class="line"></div>
        </div>
        <div class="page-title">Заявки</div>
        <div class="header__authorization">
            <div class="user">
                <div class="image"></div>
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
        <div class="navbar__item active">
            <div class="icon"><img src="img/icons/requests.png" alt="requests-icon"></div>
            <a href="requests.php">Заявки</a>
        </div>
        <div class="navbar__item">
            <div class="icon"><img src="img/icons/services.png" alt="requests-icon"></div>
            <a href="services.php">Услуги</a>
            <a href="service_add.php" class="add-new"><img src="img/icons/plus.png" alt="add-new"></a>
        </div>
        <a href="index.php" class="logout">Выход</a>

    </nav>

    <div class="container">
        <div class="wrapper">
            <h1 class="page-title">Заявки</h1>
            <ul class="responsive-table">
                <a href="#" class="delete-all">Удалить все заявки</a>
                <li class="table-header">
                    <div class="col col-3">Имя</div>
                    <div class="col col-2">Почта</div>
                    <div class="col col-2">Телефон</div>
                    <div class="col col-5">Сообщение</div>
                    <div class="col col-5">Название услуги</div>
                    <a href="requestall_del.php" class="col col-6" title="Удалить все заявки"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </li>
                <?php
                    $sql="SELECT * FROM request order by id desc";
                    $query=mysqli_query($link,$sql);
                    
                    if(!mysqli_num_rows($query) > 0)
                        { echo '<li class="table-row mobile-table-row" style="width: 100%; justify-content: center; font-weight: 600;">Нет заявок</li>'; }
                    else {				
                        while($rows=mysqli_fetch_array($query)) {
                            $mql="select * from request order by id";
                            $newquery=mysqli_query($link,$mql);
                            $fetch=mysqli_fetch_array($newquery);

                            echo '
                            <li class="table-row">
                                <a href="request_del.php?del_request='.$rows['id'].'" class="delete-vacancy">&#10006;</a>
                                <div class="col col-3" data-label="Имя">'.$rows['name'].'</div>
                                <div class="col col-2" data-label="Почта">'.$rows['mail'].'</div>
                                <div class="col col-2" data-label="Телефон"><a href="tel:'.$rows['phone'].'">'.$rows['phone'].'</a></div>
                                <div class="col col-5" data-label="Сообщение">'.$rows['message'].'</div>
                                <div class="col col-5" data-label="Название услуги">'.$rows['s_name'].'</div>
                                <div class="col col-6" data-label="Удаление"><a href="request_del.php?del_request='.$rows['id'].'"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
                            </li>
                            ';
                        }	
                    }
                ?>  
            </ul>
        </div>
    </div>
</body>
</html>