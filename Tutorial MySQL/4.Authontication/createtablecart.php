<?php

include("conn.php");
mysqli_select_db($conn , "emarket");

$sql = "CREATE TABLE IF NOT EXISTS cart (
    buyer_id INT,
    itemcode INT,
    seller_id INT,
    PRIMARY KEY (buyer_id, itemcode, seller_id),
    FOREIGN KEY (buyer_id) REFERENCES user(user_id),
    FOREIGN KEY (itemcode) REFERENCES item(itemcode),
    FOREIGN KEY (seller_id) REFERENCES user(user_id)
)";



$result = mysqli_query($conn , $sql);

if(!$result){
    die("query Fialed" . mysqli_error($conn));
}else{
    echo "<br>Database Created Sucessfully";
}

mysqli_close($conn);