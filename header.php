<?php
session_start();
$button_href = "login.php";
$button_href_name = "Войти";
$button_main_page = "index.php";
if (isset($_SESSION['user_id']))
    if ($_SESSION['user_id'] == 'admin') {
        $button_href = "exit.php";
        $button_href_name = "Выйти";
        $button_main_page = "admin_index.php";
    }
require("connect_db.php");
$mysqli = connect_db();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title ?></title>
    <link href="index.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header>
        <div class="logo"><img id="logo_image" src="Images/logo.PNG" alt=""></div>
        <div class="left-header">
            <p id="head_text"><?= $title ?></p>
            <div class="slider">
                <div class="item">
                <?php
                    $id = 3;
                    $res = $mysqli->query("SELECT title, announce FROM Tablica WHERE id = $id");
                    $row = $res->fetch_assoc();
                    ?>
                    <img src="Images/news1.jpg" alt="Первый слайд">
                    <h2 class="slider-title"><?= $row["title"] ?></h2>
                </div>

                <div class="item">
                <?php
                    $id = 4;
                    $res = $mysqli->query("SELECT title, announce FROM Tablica WHERE id = $id");
                    $row = $res->fetch_assoc();
                    ?>
                    <img src="Images/news2.jpg" alt="Второй слайд">
                    <h2 class="slider-title"><?= $row["title"]; ?></h2>
                </div>

                <div class="item">
                <?php
                    $id = 5;
                    $res = $mysqli->query("SELECT title, announce FROM Tablica WHERE id = $id");
                    $row = $res->fetch_assoc();
                    ?>
                    <img src="Images/news3.jpg" alt="Третий слайд">
                    <h2 class="slider-title"><?= $row["title"]; ?></h2>
                </div>
                <script type="text/javascript" src="slider.js"></script>
                <a class="prev" onclick="minusSlide()">&#10094;</a>
                <a class="next" onclick="plusSlide()">&#10095;</a>
            </div>
            <div class="slider-dots">
                <script type="text/javascript" src="slider.js"></script>
                <span class="slider-dots_item" onclick="currentSlide(1)"></span>
                <span class="slider-dots_item" onclick="currentSlide(2)"></span>
                <span class="slider-dots_item" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </header>
    <nav>
        <ul>
            <li>
                <a href=<?= $button_main_page ?> id="menu">Новости</a>
            </li>
            <li>
                <a href="about.html" id="menu">О нас</a>
            </li>
            <li>
                <a href=<?= $button_href ?> id="menu"><?= $button_href_name ?></a>
            </li>
        </ul>
    </nav>

    <div id="container">
        <div id="content">