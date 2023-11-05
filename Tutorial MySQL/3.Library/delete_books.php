<?php
extract($_POST);
include("conn.php");
mysqli_select_db($conn , "LIBRARY");

if(isset($_POST['btndelete'])){
    $sql = "DELETE FROM BOOKS WHERE BOOK_ID = '". $id . "'";
    $result = mysqli_query($conn , $sql);

 if(!$result){
    die("invalid query" . mysqli_error($conn));
 }
}

header("Location:view.php");


?>