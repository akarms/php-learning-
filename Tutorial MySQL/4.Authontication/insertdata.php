<?php
extract($_POST);
include("conn.php");
mysqli_select_db($conn , "emarket");


// Insert users into the 'user' table with MD5 hash passwords
$sql = " INSERT INTO user (user_id, username, password, role)
    VALUES (1, 'buyer', '" . md5('buyer123') . "', 'buyer'),
    (2, 'seller', '" . md5('seller123') . "', 'seller')
";



$result = mysqli_query($conn , $sql);


if(!$result){
    die("query Fialed" . mysqli_error($conn));
}else{
    echo "<br>Datas added Successfully";
}

mysqli_close($conn);


?>