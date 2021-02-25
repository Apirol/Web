<?php
$mysqli = new mysqli("localhost", "root", "", "news");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Новости</title>
  <link href="index.css" rel="stylesheet" type="text/css"/>
 </head>
 <body>
  <div id="container">
   <header>
       <div id="logo"><img id="logo_image" src="logo.PNG" alt=""></div>
       <p id="head_text">Новостная лента</p>
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
                <a href="login.html" id="menu">Войти</a>
            </li>
        </ul>
    </nav>

       <?php
      $res = $mysqli->query("SELECT * FROM tablica ORDER BY id ASC");
     //  echo "Исходный порядок строк...\n";
       while ($row = $res->fetch_assoc()) 
       {
        ?>
            <div id="content">
                <ul>
                    <li>
                        <div class="news">
                            <img class="round" src="<?=$row['image'] ?>">
                            <div class="news_text">
                                <h1> <?=$row['article']?> </h1>
                                <p class="anonce"> <?=$row['announcement']?> </p>
                                <a href="<?="news.php?page=" . $row['id'] ?>" class="gradient-button">Подробнее</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
      <?php
      }
      ?>
    <footer>Редут А.Ю. Нетягин М.С. Параев П.А.</footer>
  </div>
 </body>
</html>
