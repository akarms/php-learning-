<?php
include("conn.php");
mysqli_select_db($conn , "LIBRARY");

$sql = "SELECT * FROM BOOKS";
$result = mysqli_query($conn , $sql);


if(!$result){
    die("query Fialed" . mysqli_error($conn));
}else{

    echo "<table border = 1>";
    echo "<tr>";
    echo    "<td> Author</td>";
    echo    "<td> BOOK_NAME</td>";
    echo    "<td> ISBN_NO</td>";
    echo    "<td></td>";
    echo    "<td></td>";
    echo "</tr>";

    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo    "<td>".$row['AUTHOR']."</td>";
        echo    "<td>".$row['BOOK_NAME']."</td>";
        echo    "<td>".$row['ISBN_NO']."</td>";

        echo    "<form action = 'delete_books.php' method = 'post'>";
        echo    "<input type = 'hidden' name = 'id' value = '".$row['BOOK_ID']."'>";
        echo    "<td><input type = 'submit' name = 'btndelete' Value = 'Delete'></td>";
        echo    "</form>";
        echo    "<form action = 'update_book.php' method = 'post'>";
        echo    "<input type = 'hidden' name = 'id2' value = '".$row['BOOK_ID']."'> ";
        echo    "<td><input type = 'submit' name = 'btnupdate' value = 'Update'></td>";
        echo    "</form>";
        echo "</tr>";
    }

   
    echo "</table>";

}






?>