<?php
//print_r($_POST);
$name = $_POST['user_name'];
$email = $_POST['email'];

// простенькая проверка на валидность
if (trim($name) == '')
    echo "Вы не ввели имя пользователя";
else if (trim($email == '') || trim($_POST['message'] == ''))
    echo "Введите все данные";
else {
//    echo "<h1>Все данные</h1>";
//    foreach ($_POST as $p => $value)
//        echo "<p>$value</p>";
    header('Location: about_me.php');
    exit();
}