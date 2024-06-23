<?php
    include '../../backend/main.php';

    $id = $_GET['id'];
    mysqli_query($conn,"delete from users where id='$id'");
    header("location:users.php");
?>