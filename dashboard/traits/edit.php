<?php
    include '../../backend/main.php';

    $id = $_POST['id'];
    $trait_name = $_POST['trait_name'];
    $image_url = $_POST['image_url'];
    
    mysqli_query($conn, "update traits set name='$trait_name', image_url='$image_url' where id='$id'");
    header("location:traits.php");
?>