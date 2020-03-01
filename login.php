<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="style.css" rel="stylesheet">
  <title>login</title>
</head>
<body>

  <?php
session_start();

if (isset($_POST['submit'])){
  $error = [];


  $email = $_POST['email'];
  $password = $_POST['password'];


if (empty($_POST['email'])) {
    $error[] = $_SESSION['EmptyEmail'] = "Add email";

if (empty($_POST['password'])) {
    $error[] = $_SESSION['EmptyPassword'] = "Add password";
 }
};
?>

  <div class="nav">
    <ul class="nav-links">
      <li>Home</li>
      <li>Sobre nos</li>
      <li>Contato</li>
    </ul>
  </div>

  <div class="loginbox">
    <h2>Log in Here</h2>
    <form method="post">
      <p>Email</p>
      <input type="text" name="email">
<?php

if(!empty($_SESSION['EmptyEmail'])) {
    echo $error [0];
    unset($_SESSION['EmptyEmail']); 

?>
<p>Password</p>
<input type="password" name="password">
<?php

if(!empty($_SESSION['EmptyPassword'])){
   echo   $error[1];
   unset ($_SESSION['EmptyPassword']);
}
?>
<input type="submit" name="submit">
<a href="signup.php">cadastrar</a>
</form>

</body>
</html>