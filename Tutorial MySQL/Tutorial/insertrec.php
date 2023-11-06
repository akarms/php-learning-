<?php
include("conn.php");
mysqli_select_db($conn ,"students");

$sql = "INSERT INTO termOne (indexNO , name , maths , science , english)
        VALUES ('G/2022/001' , 'Amila D.S. ' , 45 , 67 , 56 ),
        ('G/2022/002' , 'Kamani. I ' , 80 , 76 , 65 ),
        ('G/2022/003' , 'Narada E.L' , 45 , 40 , 67 )
        ";

$result = mysqli_query($conn , $sql);

if(!$result){
    die("Query failed" . mysqli_error($conn));
}else{
    echo "<br>datas inserted successfully";
}



?>