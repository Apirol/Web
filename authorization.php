<?php
    session_start();
    $mysqli = new mysqli("localhost", "root", "", "news");
    if ($mysqli->connect_errno)
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

    if (isset($_POST['submit-auth-form']))
    {
        $query = mysqli_query($mysqli,"SELECT user_id, password FROM users WHERE user_id='"
        .mysqli_real_escape_string($mysqli,$_POST['login'])."' LIMIT 1");

        if(mysqli_num_rows($query) > 0)
        {
            $data = mysqli_fetch_assoc($query);
            if ($data['user_password'] == ($_POST['password']))
            {
                $_SESSION['user'] = $_POST['login'];
                header ('Location: index.php'); 
                exit();
            }
        else
            echo "неправильный пароль";
        }
    else
        echo "неправильный логин";
    }
?>