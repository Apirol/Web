<?php
session_start();
$title = "Редактировать новость";
$button_href = "exit.php";
$button_href_name = "Выйти";
require('header.php');
if ($_SESSION['user_id'] == 'admin') {
?>

  <body>
    <?php $id = (int)$_GET["page"];
    $res = $mysqli->query("SELECT * FROM Tablica WHERE id = $id");
    $res->data_seek(0);
    $row = $res->fetch_assoc() ?>
    <div id="container1">
      <div>
        <form action="redact2.php" method="POST">
          <input name="id" type="hidden" value="<?= $row["id"]; ?>">
          <input name="title" value="<?= $row["title"]; ?>"><br><br>
          <textarea rows="5" cols="80" name="announce"><?= $row["announce"]; ?></textarea><br><br>
          <textarea rows="15" cols="80" name="text"><?= $row["text"]; ?></textarea><br><br>
          <input type="date" name="date" value="<?= $row["date"]; ?>"><br><br>
          <input name="image" value="<?= $row["image"]; ?>"><br><br>
          <input class="gradient-button" name="submitChanges" type="submit" value="Сохранить" />
        </form>
      </div>
    </div>
  </body>

  </html>
<?php
} else
  echo "Нужно авторизоваться";
?>