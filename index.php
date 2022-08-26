<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB-4</title>
</head>
<style>
    .container div{
        margin: 50px;
        float:left
    }

    br{
        display: block;
        content: ""; 
        margin-top: 10px;    
    }

</style>
<body>
    <div class="container">
        <?php
            if(isset($_COOKIE['user']) == false):
        ?>
        <div class="column2">
            <h1>Авторизация</h1>
            <form action="auth.php" method="post">
                <input type="text" class="login" name="login" id="login" placeholder="Введите логин"> <br>
                <input type="text" class="password" name="password" id="password" placeholder="Введите пароль"> <br>
                <button class="btn" type="submit">Авторизоваться</button>
            </form> 
        </div>
        <div class="column2">
            <h1>Регистрация</h1>
            <form action="check.php" method="post">
                <input type="text" class="login" name="login" id="login" placeholder="Введите логин"> <br>
                <input type="text" class="password" name="password" id="password" placeholder="Введите пароль"> <br>
                <button class="btn" type="submit">Зарегистрировать</button>    
            </form> 
        </div>
        <?php else: ?>
            <p>Привет <?=$_COOKIE['user']?>. Перейти на главную <a href="/lab-4/exit.php">здесь</a>.</p>
        <?php endif;?>

    </div>
    
    
</body>
</html>