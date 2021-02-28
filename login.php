<?php
    $title = "Авторизация";
    require("header.php");
?>
    <div class="input-container">
        <img src="https://dwstroy.ru/lessons/les3373/demo/img/men.png">
        <form action="authorization.php"> 
            <div class="dws-input">
                <input type="text" name="login" placeholder="Введите логин">
            </div>
            <div class="dws-input">
                <input type="password" name="password" placeholder="Введите пароль">
            </div>
            <input class="submit-auth-form" type="submit" name="submit" value="ВОЙТИ">
        </form>
    </div>
    <?php
        require("footer.php");
    ?>
</body>