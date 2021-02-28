<?php
    $title = "Новостной сайт";
    require("header.php");
?>
       <?php
      $res = $mysqli->query("SELECT * FROM tablica ORDER BY id ASC");
     //  echo "Исходный порядок строк...\n";
       while ($row = $res->fetch_assoc()) 
       {
        ?>
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
      <?php
      }
      ?>
   <?php
        require("footer.php");
    ?>
 </body>
</html>