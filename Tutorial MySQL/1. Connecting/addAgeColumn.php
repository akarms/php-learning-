<?php
include("Conn.php");
mysqli_select_db($conn , "jobseekers");

$sql = "ALTER TABLE personal_info ADD age int";

$result = mysqli_query($conn , $sql);


if(!$result){
    echo ("Invelid Query" . mysqli_error($conn));
}else{
    echo "<br>New Column added" ;
}



?>