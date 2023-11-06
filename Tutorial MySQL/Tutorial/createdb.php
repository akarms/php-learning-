<?php
include("conn.php");

$sql = "CREATE DATABASE IF NOT EXISTS students";

$result = mysqli_query($conn , $sql);

if(!$result){
    die ("Query Failed" . mysqli_error($conn));
}else{
    echo "<br>Database created successfully";
}


?>