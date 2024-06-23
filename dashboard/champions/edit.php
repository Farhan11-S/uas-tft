<?php
    include '../../backend/main.php';

    $id = $_POST['id'];
    $api_name = $_POST['api_name'];
    $name_champion = $_POST['name_champion'];
    $cost = $_POST['cost'];
    $image_url = $_POST['image_url'];
    

    mysqli_query($conn, "update champions set api_name='$api_name', name='$name_champion', cost='$cost', image_url='$image_url' where id='$id'");
    header("location:champions.php");
?>