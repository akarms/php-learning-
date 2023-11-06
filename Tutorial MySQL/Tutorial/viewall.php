<?php
include("conn.php");
mysqli_select_db($conn ,"students");

$sql = "SELECT * FROM termOne";
$sql2 = "SELECT * FROM termOne";

$result = mysqli_query($conn , $sql);
$result2 = mysqli_query($conn , $sql);


if(!$result){
    die("Query failed" . mysqli_error($conn));
}else{
    echo "<br>";
    echo "<h1>Mark Sheet One - Marks Of three Subject</h1>";
    echo "<Table border = 3 style = 'border-collapse: collapse' width='450'>
    <tr>
    <th>Index No</th>
    <th>Name</th>
    <th>Maths</th>
    <th>Science</th>
    <th>English</th>
    </tr>";

    while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['indexNO']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['maths']."</td>";
    echo "<td>".$row['science']."</td>";
    echo "<td>".$row['english']."</td>";
    }

  echo "</table>";
  
}


if(!$result2){
    die("Query failed" . mysqli_error($conn));
}else{
    echo "<br><br><br>";

    echo "<h1>Mark Sheet Two - Total Marks Of three Subject</h1>";
    echo "<Table border = 3 style = 'border-collapse: collapse' width='300'>
    <tr>
    <th>Index No</th>
    <th>Name</th>
    <th>Total</th>
    </tr>";
  
    while($row2 = mysqli_fetch_array($result2)){
    echo "<tr>";
    $total = $row2['maths'] + $row2['science'] + $row2['english'];
    echo "<td>".$row2['indexNO']."</td>";
    echo "<td>".$row2['name']."</td>";
    echo "<td>". $total."</td>";
    }
  
  echo "</table>";
}





?>