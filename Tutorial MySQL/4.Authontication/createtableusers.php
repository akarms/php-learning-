<?php

include("conn.php");
mysqli_select_db($conn , "emarket");

// Create the 'user' table
$sqlCreateUserTable = "CREATE TABLE IF NOT EXISTS user (
    user_id INT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) NOT NULL
)";



$result = mysqli_query($conn , $sql);

if(!$result){
    die("query Fialed" . mysqli_error($conn));
}else{
    echo "<br>Database Created Sucessfully";
}

mysqli_close($conn);