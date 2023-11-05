<?php
extract($_POST);
include("conn.php");
mysqli_select_db($conn , "LIBRARY");

$sql = "INSERT INTO BOOKS (AUTHOR , BOOK_NAME , ISBN_NO)
values('$AUTHOR' , '$BOOK_NAME' , '$ISBN_NO')";



$result = mysqli_query($conn , $sql);


if(!$result){
    die("query Fialed" . mysqli_error($conn));
}else{
    echo "<br>Datas added Successfully";
}

mysqli_close($conn);


?>