<?php
   $login = filter_var(trim($_POST['login']),
   FILTER_SANITIZE_STRING);
   $password = filter_var(trim($_POST['password']),
   FILTER_SANITIZE_STRING);

   if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина";
    exit();
   } else if(mb_strlen($password) < 2 || mb_strlen($password) > 12) {
    echo "Недопустимая длина пароля";
    exit();
   } 

   $mysql = new mysqli('localhost', 'root', '', 'lab-4');
   $mysql->query("INSERT INTO `users` (`login`, `password`)
   VALUES('$login', '$password')");

   $mysql->close();

   header('Location: /lab-4/index.php');
   exit();
?>
