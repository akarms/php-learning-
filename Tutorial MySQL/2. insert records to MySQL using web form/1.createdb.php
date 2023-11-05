<?php
include("conn.php");

$sql = "CREATE DATABASE IF NOT EXISTS jobseekers";

$result = mysqli_query($conn , $sql);


if(!$result){
    die("Query failed" . mysqli_error($conn));
}else{
    echo "<br>databse created successfully";
}



mysqli_close($conn);
?>