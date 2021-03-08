<?php
$title = "Панель администрирования";
require("admin_header.php");
if (isset($_SESSION['login'])) {
?>
    <a class="gradient-button1" href="<?= "add.php" ?>">Добавить новость</a>
    <?php
    $res = $mysqli->query("SELECT * FROM Tablica ORDER BY id ASC");
    //  echo "Исходный порядок строк...\n";
    while ($row = $res->fetch_assoc()) {
    ?>
        <ul>
            <li>
                <div class="news">
                    <img class="round" src="Images/<?= $row['image'] ?>">
                    <div class="news_text">
                        <h1> <?= $row['title'] ?> </h1>
                        <p class="anonce"> <?= $row['announce'] ?> </p>
                        <time><?= $row['date'] ?></time><br>
                        <a href="<?= "admin_news.php?page=" . $row['id'] ?>" class="gradient-button">Подробнее</a>
                        <a class="gradient-button" href="<?= "redact.php?page=" . $row['id'] ?>">Редактировать новость</a>
                        <a class="gradient-button" href="<?= "delete.php?page=" . $row['id'] ?>">Удалить новость</a>

                    </div>
                </div>
            </li>
        </ul>
    <?php
    }
    ?>
    <?php
    require("footer.php");
    ?>
    </body>

    </html>
<?php
} else
    echo "Нужно авторизироваться";
?>