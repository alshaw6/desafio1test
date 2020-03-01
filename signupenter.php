<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
    <title>Sign up</title>
</head>
<body>

    <div class="nav">
        <ul class="nav-links">
            <li>Home</li>
            <li>Sobre nos</li>
            <li>Contato</li>
        </ul>
    </div>

    <!-- <h3>Usuarios</h3>

    <p>adm</p> <button type="button" class="btn-warning">editar</button>
    <p>adm#msn.com</p> <button type="button" class="btn-danger">Excluir</button>
    <br>
    <p>camila</p> <button type="button" class="btn-warning">editar</button>
    <p>camila@gmail.com</p> <button type="button" class="btn-danger">Excluir</button> -->

    <h3>Sign up </h3>
    <form method="post" action="login.php" class="main-form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control">
            <?php
            session_start();

                        if (!empty($_SESSION['name'])) {
                            echo $error[0];
                            unset($_SESSION['name']);
                        }
                        ?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <?php
                        if (!empty($_SESSION['EmptyEmail'])) {
                            echo $error[0];
                            unset($_SESSION['EmptyEmail']);
                        }
                        ?>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
            <?php
                        if (!empty($_SESSION['EmptyPassword'])) {
                            echo $error[0];
                            unset($_SESSION['EmptyPassword']);
                        }
                            ?>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">confirm password</label>
            <input type="password" name="password_confirm" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="button" class=" btn-primary btn-lg btn-block">adicionar</button>

    </form>
</body>
</html>

<?php

session_start();

$username = $email = $password = $password_confirm = '';

$errors = array('username' => '','email' => '', 'password' => '', 'password_confirm' => '');

if(isset($_POST['signup-submit'])){

    if(empty($_POST['username'])){
        $errors['username'];

    } elseif (strlen($_POST['username']) < 6) {
        $errors['username'];
    } else {
        $nome = $_POST['username'];
    };

    if((empty($_POST['email'])) || (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
        $errors['email'];
    } else {
        $email = $_POST['email'];
    };

    if( (empty($_POST['password'])) || (strlen($_POST['password']) < 6)){
        $errors['password'];
    } else {
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    };

    if(($_POST['password_confirm']) !== ($_POST['password'])){
        $errors['password_confirm'];
    }

};
?>