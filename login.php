<?php
    $title = "Авторизация";
    require("header.php");
?>
    <div class="input-container">
        <img src="https://dwstroy.ru/lessons/les3373/demo/img/men.png">
        <form>
            <div class="dws-input">
                <input type="text" name="username" placeholder="Введите логин">
            </div>
            <div class="dws-input">
                <input type="password" name="password" placeholder="Введите пароль">
            </div>
            <input class="dws-submit" type="submit" name="submit" value="ВОЙТИ"><br />
            <a href="#">Восстановить пароль</a>
        </form>
    </div>
    <?php
        require("footer.php");
    ?>
</body>