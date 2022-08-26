<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'root', '', 'lab-4');
    
    $result = $mysql->query("SELECT * FROM `users` 
    WHERE `login` = '$login' AND `password` = '$password'");
    $user = $result->fetch_assoc();
    if(count((array)$user) == 0) {
        echo "Такого пользователя не существует";
        exit();
    }
    
    
    setcookie('user', $user['login'], time() + 3600, "/lab-4/index.php");

    

    $mysql->close();
    header('Location: /lab-4/index.php');
    
    
?>