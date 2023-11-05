<?php
include("conn.php");

$sql = "CREATE DATABASE IF NOT EXISTS LIBRARY";

$result = mysqli_query($conn , $sql);

if(!$result){
    die("query Fialed" . mysqli_error($conn));
}else{
    echo "<br>Database Created Sucessfully";
}

mysqli_close($conn);


?>