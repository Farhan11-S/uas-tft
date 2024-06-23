<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if (isset($_SESSION['username'])) header("location:../comps.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TFT COMP BUILDER</title>
  <link rel="stylesheet" href="../public/styles/style.css" />
</head>

<body>
  <div class="container">
    <div class="form-title">Sign Up</div>
    <form action="../backend/auth.php" method="post">
      <div>
        <?= !isset($_GET['error']) ? '' : '<p class="text-red-600">' . $_GET['error'] . '</p>' ?>
        <label for="">Username</label>
        <input class="input-auth" type="text" name="username" />
      </div>
      <div>
        <label for="">Password</label>
        <input class="input-auth" type="password" name="password" />
      </div>
      <button name="register" type="submit">Sign Up</button>
      <a href="./sign-in.php" class="create-account">Already have an account ?</a>
    </form>
  </div>
</body>

</html>