<?php
    $title = "Новостной сайт";
    require("header.php");
?>
                <div id="current_news">
                <?php $id = $_GET["page"];
                    $res = $mysqli->query("SELECT * FROM Tablica WHERE id = $id");
                    $res->data_seek(0);
                    $row = $res->fetch_assoc() ?> 
                    <img class="round" src="Images/<?=$row["image"]; ?>" align="center">
                    <div class="news_text">
                        <h1 style="text-align:center"><?=$row["title"];?></h1>
                        <p><?=$row["text"];?></p>
                        <a href="index.php" class="gradient-button">На главную</a>
                        <time><?=$row['date']?></time>
                    </div>
                </div>
            </div>
        </div>
	<?php
        require("footer.php");
    ?>