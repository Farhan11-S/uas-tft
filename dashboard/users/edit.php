<?php
    include '../../backend/main.php';

    $id = $_POST['id'];
    $username = $_POST['username'];
    $role = strtolower($_POST['role']);
    $filename = $_POST['filename'];

    mysqli_query($conn, "update users set username='$username', role='$role' where id='$id'");
    header("location:$filename.php");
?>