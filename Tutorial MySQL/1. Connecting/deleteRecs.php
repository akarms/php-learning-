<?php
include("conn.php");
mysqli_select_db($conn , "jobseekers");


$sql = "DELETE from personal_info";

$result = mysqli_query($conn , $sql);


if(!$result){
    echo ("Invelid Query" . mysqli_error($conn));
}else{
    echo "<br>Records Deleted" ;
}


?>