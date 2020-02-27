<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"
     rel="stylesheet" id="bootstrap-css">
     <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="nav">
    <ul class="nav-links">
      <li>Home</li>
      <li>Sobre nos</li>
      <li>Contato</li>
    </ul>
  </div>
  
  <div class="loginbox1">
    <h2>Sign in</h2>
    <form action="login.php" method="post">
        <p>username</p>
        <input type="text" name="usersign">
      <p>Email</p>
      <input type="text" name="email">
      <p>Password</p>
      <input type="password" name="password">
      <p> Confirm Password</p>
      <input type="password" name="password_confirm">
      <input type="submit" name="signup-submit">
      <a href="login.php"><strong>Log in</strong></a>

    </form>





</body>
</html>