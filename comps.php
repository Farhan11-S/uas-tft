<?php

require_once 'backend/my_comp.php';
if (!isset($_SESSION)) {
  session_start();
}
if (!isset($_SESSION['username'])) header("location:./auth/sign-in.php");

$list = getCompsWithChampionsAndTraits($conn, $_SESSION['id']);

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

<script>
  function showPopup(popupId) {
    document.getElementById(popupId).style.display = "block";
    document.getElementById("overlay").style.display = "block";
    document.querySelector('.content').classList.add('blur');
  }

  function closePopup(popupId) {
    document.getElementById(popupId).style.display = "none";
    document.getElementById("overlay").style.display = "none";
    document.querySelector('.content').classList.add('blur');
  }

  function showEditTitlePopup(id) {
    document.getElementById('id_comp_edit').value = id;
    showPopup("editTitlePopup");
  }

  function showDeleteConfirmation(id) {
    document.getElementById('id_comp').value = id;
    showPopup("deleteConfirmPopup");
  }
</script>


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
      foreach ($list as $id => $comp) {
      ?>
        <div class="card-comp" style="margin-bottom: 8px">
          <div><?= $comp['title'] ?></div>
          <div class="right-side">
            <div class="section">
              <div style="display: flex; column-gap: 12px; align-items: center;">
                <?php
                foreach ($comp['traits'] ?? [] as $key => $trait) {
                ?>
                  <div class="traits">
                    <?php
                    if (!empty($trait['value'])) echo '<img src="' . $trait['image_url'] . '" class="traits-icon" alt="' . $trait['name'] . '" />';
                    if (!empty($trait['value'])) echo '<div class="trait-count">' . $trait['value'] . '</div>';
                    ?>
                  </div>
                <?php
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
            <div onclick="showEditTitlePopup(<?= $id ?>)" class="fa fa-edit"></div>
            <div onclick="showDeleteConfirmation(<?= $id ?>)" class="fa fa-trash" style="color: red; margin-top: 8px"></div>
          </div>
        </div>
        <div class="popup" id="editTitlePopup">
          <h2>Change Title</h2>
          <form id="editTitleForm" action="./backend/my_comp.php" method="post">
            <input type="hidden" name="id_comp" id="id_comp_edit">
            <input class="input-title" id="title" type="text" name="title" placeholder="Enter your title comp" required />
            <div>
              <button type="submit" class="primary" style="margin-right: 20px;" name="update">Simpan</button>
              <button type="button" onclick="closePopup('editTitlePopup')" class="secondary">Batal</button>
            </div>
          </form>
        </div>

        <div class="popup" id="deleteConfirmPopup">
          <h2>Konfirmasi Hapus</h2>
          <p>Apakah Anda yakin ingin menghapus item ini?</p>
          <form id="deleteForm" action="./backend/my_comp.php" method="post">
            <input type="hidden" name="id_comp" id="id_comp">
            <button type="submit" class="primary" name="delete">Ya, Hapus</button>
            <button type="button" onclick="closePopup('deleteConfirmPopup')" class="secondary">Batal</button>
          </form>
        </div>
      <?php
      }
      ?>
      <div class="popup-overlay" id="overlay"></div>
    </div>
</body>

</html>