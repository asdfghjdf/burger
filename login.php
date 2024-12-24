<?php ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class='tale-wrapper'>
    <div class='table-title'>Войти в панель администратора</div>
    <div class='table-content'>
        <form method='post' action="\auth\login.php" id='login-form' class='login-form'>
            <input type='text' placeholder='Логин' class='input'
                   name='login' required><br>
            <input type='password' placeholder='Пароль' class='input'
                   name='password' required><br>
            <input type='submit' value='Войти' class='button'>
        </form>
    </div>
</div>
</body>
</html>
