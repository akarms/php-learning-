<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// if else statement
// if(condition){
//     code to be executed if condition is true;    
// }else{
//     code to be executed if condition is false;
// }

 $t = date("H");
 echo $t."<br>";
 //date function is used to get the current date and time in php
    //H is used to get the current hour in 24 hour format
 if($t < "20"){
     echo "Have a good day!";
    }
    else{
        echo "Have a good night!";
    };

    //if elseif else statement
    // if(condition){
    //     code to be executed if condition is true;
    // }elseif(condition){
    //     code to be executed if condition is true;
    // }else{
    //     code to be executed if condition is false;
    // }
      echo "<br>";
    $t = 50;
    if($t < 20){
        echo "Have a good day!";
    }elseif($t < 30){
        echo "Have a good morning!";
    }else{
        echo "Have a good night!";
    };



?>
</body>
</html>