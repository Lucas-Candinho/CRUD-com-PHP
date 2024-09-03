<?php
    include 'db.php';

    $id = $_GET['id'];

    $sql = "DELETE from user 
    WHERE id = '$id'";
    $result = $conn -> query($sql);
    $conn ->close();
    header ("Location: read.php");
    exit();
?>