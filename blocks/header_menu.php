<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Khmelevsky Egor</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="img/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <!--Возможно здесь ещё будет добавление кастомного шрифта-->
</head>
<body>
<noscript>
    Включите JS в настройках браузера
</noscript>

<header>
    <p class="name">
        Khmelevsky Egor
    </p>

    <div class="dropdown">
        <button class="new_menu" style="border-left:1px solid navy">
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href=<?= $home ?>>Home</a>
            <a href=<?= $my_work ?>>My work</a>
            <a href=<?= $about_me ?>>About me</a>
        </div>
    </div>
</header>

<div class="menu">
    <li>
        <a href=<?= $home ?>>
            Home
        </a>
    </li>
    <li>
        <a href=<?= $my_work ?>>
            My work
        </a>
    </li>
    <li>
        <a href=<?= $about_me ?>>
            About me
        </a>
    </li>
</div>