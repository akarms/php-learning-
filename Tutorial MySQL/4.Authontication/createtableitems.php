<?php

include("conn.php");
mysqli_select_db($conn , "emarket");

// Create the 'item' table
$sqlCreateItemTable = "CREATE TABLE IF NOT EXISTS item (
    itemcode INT PRIMARY KEY,
    itemname VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    seller VARCHAR(255) NOT NULL
)";



$result = mysqli_query($conn , $sql);

if(!$result){
    die("query Fialed" . mysqli_error($conn));
}else{
    echo "<br>Database Created Sucessfully";
}

mysqli_close($conn);