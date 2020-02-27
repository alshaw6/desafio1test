

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="style.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>

  <?php

if (isset($_POST['submit-login'])){

  $email = $_POST['email'];
  $password = $_POST['password'];

  if(empty($email) || empty($password)){
    header("location: ../login.php?error=emptyfields");
    exit();
  }
  
else{
  header("location: ../login.php");
  exit();
}
}



  // if (isset($_POST['submit'])) {
  //   $user = $_POST['email'];
  //   $pass = $_POST['password'];

  //   if ($user == "alshaw6@hotmail.com" && $pass == "alshaw") {
  //     header("location: addusuarios.php ");
  //   } else {
  //     echo ("erro");
  //   }
  // }

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
    <form action="login.php" method="post">
      <p>Email</p>
      <input type="text" name="email">
      <p>Password</p>
      <input type="password" name="password">
      <input type="submit" name="submit-login">
      <a href="signup.php">cadastrar</a>
    </form>
</body>

</html>