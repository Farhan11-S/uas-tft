<?php
    include '../../backend/main.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $role = strtolower($_POST['role']);

    mysqli_query($conn, "insert into users values('','$username','$hashedPassword','$role')");
    header("location:users.php");
?>