<?php
extract($_POST);
include("conn.php");
mysqli_select_db($conn , "LIBRARY");


if(isset($_POST['btnupdate'])){
    echo"<h1> changes </h1>";
    echo "<table >";
    echo "<tr>";
    echo    "<td> Author</td>";
    echo    "<form method = 'post' action = 'updatecomplete.php'>";
    echo    "<td><input type = 'text' name = 'newauthor'></td>";
    echo "</tr>";
    echo "<tr>";
    echo    "<td> BOOK_NAME</td>";
    echo    "<td><input type = 'text' name = 'newbookname'></td>";
    echo "</tr>";
    echo "<tr>";
    echo    "<td> ISBN_NO</td>";
    echo    "<td><input type = 'text' name = 'newisbnno'></td>";
    echo "</tr>";
    echo "<tr>";
    echo    "<td><input type = 'hidden' name = 'id3' value = '".$id2."'> ";
    echo    "<td><input type = 'submit' value = 'UPDATE'></td>";
    echo "</tr>";
    echo    "</form>";




}


?>