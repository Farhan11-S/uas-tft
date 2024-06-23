<?php

require_once 'backend/my_comp.php';
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if (!isset($_SESSION['username'])) header("location:./auth/sign-in.php");


$list = getCompsWithChampionsAndTraits($conn, $_SESSION['id']);
// header('Content-Type: application/json');
// echo json_encode($list);
// die;

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>TFT COMP BUILDER</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./public/styles/style-comps.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <div class="header">
    <div class="left-side">
      <img src="./public/images/default-avatar.jpg" class="avatar" alt="avatar" />
      <div class="username"><?= $_SESSION['username'] ?></div>
    </div>
    <form action="./backend/auth.php" method="post">
      <button class="button-logout" name="logout" type="submit"><i class="fa fa-sign-out"></i></button>
    </form>
  </div>
  <div class="my-comps">
    <div class="header-comps">
      <div>My Comps</div>
      <a href="./create-comp.php" class="button-create-comp">
        <i class="fa fa-plus"></i>
        <div>Create</div>
      </a>
    </div>
    <hr />
    <?php
    if (empty($list)) {
    ?>
      <div class="empty-comps">
        <div class="title">Create TFT Comps</div>
        <div class="desc">
          This platform allows you to create the best composition for TFT games
          with ease. Click 'Start Building' to begin creating your team
          composition.
        </div>
        <a href="./create-comp.php" class="button-create-comp">
          <i class="fa fa-plus"></i>
          <div>Start Building</div>
        </a>
      </div>
    <?php
    }
    ?>
    <div class="comps">
      <?php
      foreach ($list as $comp) {
      ?>
        <div class="card-comp" style="margin-bottom: 8px">
          <div><?= $comp['title'] ?></div>
          <div class="right-side">
            <div class="section">
              <div class="traits">
                <?php
                foreach ($comp['traits'] as $key => $trait) {
                  if (!empty($trait['value'])) echo '<img src="' . $trait['image_url'] . '" class="traits-icon" alt="' . $trait['name'] . '" />';
                  if (!empty($trait['value'])) echo '<div class="trait-count">' . $trait['value'] . '</div>';
                }
                ?>
              </div>
              <div class="units">
                <?php
                foreach ($comp['champions'] as $key => $champ) {
                  if (!empty($key)) echo '<img src="' . $champ['image_url'] . '" class="unit" alt="' . $champ['name'] . '" />';
                }
                ?>
              </div>
            </div>
          </div>
          <div class="action-comp">
            <i class="fa fa-edit"></i>
            <i class="fa fa-trash" style="color: red; margin-top: 8px"></i>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</body>

</html>