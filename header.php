<?php
    session_start();
    $button_href = "login.php";
    $button_href_name = "Войти";
    if (isset($_SESSION['user_id']))
        if ($_SESSION['user_id'] == 'admin')
        {
            $button_href = "exit.php";
            $button_href_name = "Выйти";
        }
    $mysqli = new mysqli("localhost", "root", "", "News");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
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
        <div id="logo"><img id="logo_image" src="Images/logo.PNG" alt=""></div>
        <p id="head_text"><?= $title ?></p>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php" id="menu">Новости</a>
            </li>
            <li>
                <a href="about.html" id="menu">О нас</a>
            </li>
            <li>
                <a href=<?= $button_href?> id="menu"><?= $button_href_name?></a>
            </li>
        </ul>
    </nav>

    <div id="container">
        <div id="content">