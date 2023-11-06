<?php
include("conn.php");
mysqli_select_db($conn ,"students");

$sql = "CREATE TABLE IF NOT EXISTS personalInfo
     (Sname varchar(20) ,
        Saddress varchar(20) ,
        Stno int(10) )
";
$result = mysqli_query($conn , $sql);

if(!$result){
    die("Query failed" . mysqli_error($conn));
}else{
    echo "<br>databse created successfully";
}



?>