<?php

if(isset($_POST['signup-submit'])){

    $username = $_POST['usersign'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if(empty($username) || empty($email) || empty($password) || empty($password_confirm)) {
        header("location: ../signup.php?error=emptyfields&usersign=".$username."&email=".$email);
        exit();
       }
     elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("location: ../signup.php?error=invalidemailusersign=".$username."&email=".$email);
         exit();

     }
     else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         header("location: ../signup.php?error=invalidemail&usersign=".$username);
         exit();

     }
     else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
         header("location: ../signup.php?error=invalidusersign&email=".$email);
         exit();

     }
     else if($password !== $password_confirm){
         header("location: ../signup.php?error=passwordcheck&email=".$username."&email=".$email);
         exit();


     }

    }
    
    



