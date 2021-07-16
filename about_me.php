<?php
    $home = "main.php";
    $my_work = "my_work.php";
    $about_me = "#";
    require "blocks/header_menu.php"
?>
<link rel="stylesheet" href="about_me.css">

<div class="container">
    <p class="info">
        Привет, меня зовут Егор.<br>
        Я являюсь студентом третьего курса направления МОАИС в ДВФУ.<br>
        На данном сайте расположены моё фотографическое портфолио,
        небольшая игра, <br>а так же краткая информация обо мне,
        которую вы сейчас и читаете.<br><br>
        P.S. Сайт сделан исключительно от безделия автора, но всё же
        если есть <br>какие-то пожелания по сайту, я всегда рад выслушать
        ваше мнение. <br>Оставить его вы можете в форме ниже.
    </p>
    <!--Здесь будет форма для обратной связи-->
</div>

<form action="check_post.php" method="post">
    <input type="text" name="user_name" placeholder="Введите имя" class="from-control">
    <input type="email" name="email" placeholder="Введите email" class="from-control">
    <textarea name="message" class="from-control" placeholder="Введите сообщение"></textarea>
    <input type="submit" value="отправить" class="btn">
</form>

</body>

<footer>
    <!--Здесь будут ссылки на контакты автора-->
</footer>
</html>