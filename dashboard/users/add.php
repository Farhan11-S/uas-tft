<?php
    include '../../backend/main.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $role = strtolower($_POST['role']);
    $filename = $_POST['filename'];

    mysqli_query($conn, "insert into users (username, password, role) values ('$username','$hashedPassword','$role')");
    header("location:$filename.php");
?>