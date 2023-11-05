<?php
include("conn.php");
mysqli_select_db($conn , "jobseekers");


$sql = "DROP table Personal_info";

$result = mysqli_query($conn , $sql);


if(!$result){
    echo ("Invelid Query" . mysqli_error($conn));
}else{
    echo "<br>Table Deleted" ;
}


?>