<?php
include ("conn.php");
$result = mysqli_query($conn , "CREATE DATABASE jobseekers");
echo "<br>";
if(!$result){
    die("invalid query" . mysqli_error($conn));
}else{
    echo "Database created Successfully ";
};                 
mysqli_close($conn);

?>