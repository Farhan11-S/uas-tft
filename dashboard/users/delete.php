<?php
    include '../../backend/main.php';

    $id = $_GET['id'];
    $filename = $_GET['filename'];
    mysqli_query($conn,"delete from users where id='$id'");
    header("location:$filename.php");
?>