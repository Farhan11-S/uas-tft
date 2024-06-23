<?php

session_start();
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
    <div class="form-title">Sign In</div>
    <form action="../backend/auth.php" method="post">
      <div>
        <?= !isset($_GET['error']) ? '' : '<p class="text-red-600">Username atau password tidak valid</p>' ?>
        <?= !isset($_GET['afterRegistration']) ? '' : '<p class="text-red-600">Pendaftaran Berhasil! Silahkan Login akun anda</p>' ?>
        <label for="">Username</label>
        <input class="input-auth" type="text" name="username" />
      </div>
      <div>
        <label for="">Password</label>
        <input class="input-auth" type="password" name="password" />
      </div>
      <button name="login" type="submit">Sign in</button>
      <a href="./sign-up.php" class="create-account">Don't have an account? Create one!</a>
    </form>
  </div>
</body>

</html>