<?php

extract($_POST);
include("conn.php");
mysqli_select_db($conn , "LIBRARY");

$sql1 = "UPDATE BOOKS SET AUTHOR = '".$newauthor."' ,BOOK_NAME = '".$newbookname."' ,  ISBN_NO = '".$newisbnno."'   WHERE BOOK_ID = '". $id3 . "'";


$result = mysqli_query($conn , $sql1);


if(!$result){
    die("query Fialed" . mysqli_error($conn));
}else{
    echo "<br>Databas updated Successfully";
}


header("Location:view.php");


?>


                
