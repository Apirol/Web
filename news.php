<?php
$title = "Новостной сайт";
$button_href = "login.php";
$button_href_name = "Войти";
require("header.php");
?>
<div id="current_news">
    <?php $id = $_GET["page"];
    $res = $mysqli->query("SELECT * FROM Tablica WHERE id = $id");
    $res->data_seek(0);
    $row = $res->fetch_assoc() ?>
    <img class="round" src="Images/<?= $row["image"]; ?>" align="center">
    <div class="news_text">
        <h1 style="text-align:center"><?= $row["title"]; ?></h1>
        <p><?= $row["text"]; ?></p>
        <a href="index.php" class="gradient-button">На главную</a>
    </div>
</div>
<time><?= $row['date'] ?></time>
<?php
require("footer.php");
?>