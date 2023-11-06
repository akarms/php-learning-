<?php
include("conn.php");
mysqli_select_db($conn ,"students");

$sql = "CREATE TABLE IF NOT EXISTS termOne
     (indexNO varchar(15) PRIMARY KEY ,
        name varchar(20) ,
        maths int(3) ,
        science int(3) ,
        english int(3) )
";
$result = mysqli_query($conn , $sql);

if(!$result){
    die("Query failed" . mysqli_error($conn));
}else{
    echo "<br>databse created successfully";
}



?>