<?php
extract($_POST);
include("Conn.php");
mysqli_select_db($conn , "jobseekers");

$sql = "INSERT INTO personal_info (title , name , gender , dateofbirth)
values('$title' , '$name' , '$gender' , '$bday')" ;

$result = mysqli_query($conn , $sql) ;

if(!$result){
    die("invalid query" . mysqli_error($conn));
}else{
    echo "<br>record added successfully";
};

mysqli_close($conn);

?>