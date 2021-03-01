<?php
    $title = "Панель администрирования";
?>
    <p><a id="menu" href="<?="add.php"?>">Добавить новость</a></p>
    <p><a class="admin-button" href="<?="create.php?page=" ?>">Удалить новость</a></p>
    <p><a class="admin-button-redact" href="<?="create.php?page=" ?>">Редактировать новость</a></p>
<?php
    require("index.php");
?>
 </body>
</html>