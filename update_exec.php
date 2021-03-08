<?php
session_start();
require("connect_db.php");
$mysqli = connect_db();
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_id'] == 'admin') {
        if (isset($_POST['submitChanges'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $announce = $_POST['announce'];
            $text = $_POST['text'];
            $date = $_POST['date'];
            $image = $_POST['image'];
            if (!($stmt = $mysqli->prepare("UPDATE Tablica 
    SET title=?, announce=?, text=?, date=?, image=? WHERE id=?")))
                echo "Не удалось подготовить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
            if (!$stmt->bind_param("ssssss", $title, $announce, $text, $date, $image, $id))
                echo "Не удалось привязать параметры: (" . $stmt->errno . ") " . $stmt->error;
            if (!$stmt->execute())
                echo "Не удалось выполнить запрос: (" . $stmt->errno . ") " . $stmt->error;
            $stmt->close();
            header('Location: admin_index.php');
        }
    } else
        echo "Нужно авторизоваться";
}
