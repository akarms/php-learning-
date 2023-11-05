<?php
include("Conn.php");
mysqli_select_db( $conn ,"jobseekers");

$sql = "UPDATE personal_info SET title = 'Mrs.' WHERE id = '3'";

$result = mysqli_query($conn , $sql);


if(!$result){
    echo ("Invelid Query" . mysqli_error($conn));
}else{
    echo "<br>Data Updated" ;
}


?>