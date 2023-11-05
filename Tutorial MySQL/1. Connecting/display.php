<?php 
include("Conn.php");
mysqli_select_db($conn , "jobseekers");

//view data 

$sql = "SELECT * FROM personal_info" ;

$result = mysqli_query($conn , $sql) ;

if(!$result){
    die("invalid qiery" . mysqli_error($conn));
}else{
    echo "<h2> Job Seekers</h2><Table border = 1>
    <tr>
    <th>Title</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Date of birth</th>
    </tr>";

    while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['title']."</td>";  
    echo "<td>".$row['name']."</td>"; 
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['dateofbirth']."</td>";  
    }

  echo "</table>";  
}




?>