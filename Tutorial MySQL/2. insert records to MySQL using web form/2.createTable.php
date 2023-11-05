<?php
include("conn.php");
mysqli_select_db($conn ,"jobseekers");

$sql = "CREATE TABLE personal_info
                (id int AUTO_INCREMENT PRIMARY KEY , 
                title varchar(10),
                name varchar(100) ,
                gender varchar(10) ,
                dateofbirth date )";


$result = mysqli_query($conn , $sql);

if(!$result){
    die("Query failed" . mysqli_error($conn));
}else{
    echo "<br>databse created successfully";
}



mysqli_close($conn);



?>