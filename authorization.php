<?php
    session_start();
    $mysqli = new mysqli("localhost", "root", "", "site");
    if ($mysqli->connect_errno)
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

    if (isset($_POST['submitLoginAndPass']))
    {
        $query = mysqli_query($mysqli,"SELECT user_id, user_password FROM users WHERE user_login='"
        .mysqli_real_escape_string($mysqli,$_POST['login'])."' LIMIT 1");

        if(mysqli_num_rows($query) > 0)
        {
            $data = mysqli_fetch_assoc($query);
            if ($data['user_password'] == ($_POST['password']))
            {
                $_SESSION['user'] = $_POST['login'];
                header ('Location: index2.php'); // перенаправление на нужную страницу
                exit();
            }
        else
            echo "неправильный пароль";
        }
    else
        echo "неправильный логин";
    }
?>
