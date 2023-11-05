<?php 
include("conn.php");
mysqli_select_db( $conn , "jobseekers");

$sql = "SELECT * FROM personal_info";

$result = mysqli_query($conn , $sql);

if(!$result){
    echo("Invelid query" . mysqli_error($conn));
}else{
    echo "<table border = 1>";
    echo "<tr> <td>Title</td>
                <td>Name</td>
                <td>Gender</td>
                <td>DAte of birth</td></tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['title']."</td>";  
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['gender']."</td>";
        echo"<td>".$row['dateofbirth']."</td>";
        echo"</tr>";
    };
}

mysqli_close($conn);


?>