<?php

include("conn.php");
mysqli_select_db($conn , "LIBRARY");

$sql = "CREATE TABLE BOOKS 
         (BOOK_ID int AUTO_INCREMENT PRIMARY KEY ,
         AUTHOR varchar(20),
          BOOK_NAME varchar(30) ,
          ISBN_NO int)";


$result = mysqli_query($conn , $sql);

if(!$result){
    die("query Fialed" . mysqli_error($conn));
}else{
    echo "<br>Database Created Sucessfully";
}

mysqli_close($conn);


?>



