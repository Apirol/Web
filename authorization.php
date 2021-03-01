<?php
    session_start();
    $mysqli = new mysqli("localhost", "root", "", "news");
    if ($mysqli->connect_errno)
        echo "Не удалось подключиться к MySQL:(". $mysqli->connect_errno .") ".$mysqli->connect_error;

    if (isset($_POST['submit-auth']))
    {
        $query = mysqli_query($mysqli,"SELECT user_id, password FROM users WHERE user_id='"
        .mysqli_real_escape_string($mysqli,$_POST['login'])."' LIMIT 1");

        if(mysqli_num_rows($query) > 0)
        {
            $data = mysqli_fetch_assoc($query);
            if ($data['password'] == ($_POST['password']))
            {
                $_SESSION['user_id'] = $_POST['login'];
                echo "Авторизация прошла успешно";
                header ('Location: admin_index.php'); 
                exit();
            }
            else
                echo "неправильный пароль";
        }
        else
            echo "неправильный логин";
    }
?>