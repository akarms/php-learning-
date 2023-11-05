<?php
include("conn.php");
mysqli_select_db($conn , "jobseekers");


$sql = "INSERT INTO personal_info(title,name,gender,dateofbirth)
values('Ms.' ,' k.Sedara ' , 'F' , '1980-11-02' ),
('Mr.' ,' A.perera' , 'M' , '1982-04-14' ),
('Mr.' ,' S.alwin ' , 'M' , '1969-03-03' )";

$result = mysqli_query($conn,$sql);

if(!$result){
    die("invalid query".mysqli_error($conn));
}else{
    echo "Data inserted <br>";
}

mysqli_close($conn);



?>