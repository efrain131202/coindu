<?php
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $dbname = "project";
    $conn = new mysqli($host , $user, $pass, $dbname);
    mysqli_query($conn , "SET character_set_result=utf8");
    if($conn->connect_error){
        die("Database Error : " . $conn->connect_error);
    }
?>