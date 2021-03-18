<?php
require("header.php");
$mysqli = connect_db();
date_default_timezone_set('UTC');
if (isset($_SESSION['user_id']))
{
if ($_SESSION['user_id'] == 'admin') 
{ 
?>
<div class="row justify-content-center">
    <form action="create_exec.php" method="POST" enctype="multipart/form-data">
        <div id="container1">
            <p>Введите заголовок:<br>
                <input type="text" name="title">
            </p>
            <p>Введите анонс: <br>
                <textarea rows="5" cols="80" name="announce"></textarea><br><br>
            <p>Введите текст: <br>
                <textarea rows="15" cols="80" name="text"></textarea><br><br>
            <p>Введите Дату: <br>
                <input type="date" name="date" value="<?php date("d.m.Y")?>">
            </p><br>
            <p>Добавьте картинку<br>
                <input type="hidden" value="30000">
                <input type="file" name="image">
            </p>

            <input name="submitChanges" type="submit" value="Добавить">
        </div>
    </form>
</div>
<?php
} else echo("Please Log in");
}
?>

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