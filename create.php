<?php
require ("header.php");
if (isset($_POST['submitChanges']))
{
 $title = $_POST['article'];
 $anons = $_POST['announcement'];
 $text_news = $_POST['news'];
 $image = $_POST['image'];
 if (!($stmt = $mysqli->prepare("INSERT INTO tablica(time, article, announcement, news, image)
 VALUES (current_timestamp(),?,?,?,?)")))
 echo "Не удалось подготовить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
 if (!$stmt->bind_param("ssss", $title, $announcement, $text_news, $image))
 echo "Не удалось привязать параметры: (" . $stmt->errno . ") " . $stmt->error;
 if (!$stmt->execute())
 echo "Не удалось выполнить запрос: (" . $stmt->errno . ") " . $stmt->error;
 $stmt->close();
    header ('Location: admin_index.php');
}
?>