<?php
    setcookie('user', $user['login'], time() - 3600, "/lab-4/index.php");
    header('Location: /lab-4/index.php');
?>