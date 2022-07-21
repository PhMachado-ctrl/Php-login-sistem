<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php
        //se não existir uma sessão çogin
        if(!isset($_SESSION['login'])){
            if(isset($_POST['acao'])){
                $login = 'guilherme';
                $senha = '123456';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];
            }
            include('login.php');
        }else{
            include('home.php');
        }
    ?>

</body>
</html>