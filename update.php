<?php
require("header.php");
$mysqli = connect_db();
?>
    <?php $id = (int)$_GET["page"];
    $res = $mysqli->query("SELECT * FROM Tablica WHERE id = $id");
    $res->data_seek(0);
    $row = $res->fetch_assoc() ?>
    <div id="container1">
      <div class="row justify-content-center">
        <form action="update_exec.php" method="POST">
          <input name="id" type="hidden" value="<?= $row["id"]; ?>">
          <input name="title" value="<?= $row["title"]; ?>"><br><br>
          <textarea rows="5" cols="80" name="announce"><?= $row["announce"]; ?></textarea><br><br>
          <textarea rows="15" cols="80" name="text"><?= $row["text"]; ?></textarea><br><br>
          <input type="date" name="date" value="<?= $row["date"]; ?>"><br><br>
          <p>Добавьте картинку<br>
                <input type="hidden" value="30000">
                <input type="file" name="image" value="Images/<?= $row["image"]; ?>">
            </p><br><br>
          <input class="gradient-button" name="submitChanges" type="submit" value="Сохранить" />
        </form>
      </div>
    </div>

    <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

    <!-- Scripts -->
    <script src="jquery-3.4.1.min.js"></script>
    <script src="jquery.hoverIntent.min.js"></script>
    <script src="perfect-scrollbar.min.js"></script>
    <script src="jquery.easing.min.js"></script>
    <script src="wow.min.js"></script>
    <script src="parallax.min.js"></script>
    <script src="isotope.min.js"></script>
    <script src="imagesloaded.pkgd.min.js"></script>
    <script src="packery-mode.pkgd.min.js"></script>
    <script src="owl-carousel.min.js"></script>
    <script src="jquery.appear.js"></script>
    <script src="jquery.countTo.js"></script>
    <script src="main.js"></script>