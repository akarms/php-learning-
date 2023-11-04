<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
// switch case statement
// switch (n) {
//     case label1:
//       code to be executed if n=label1;
//       break;
//     case label2:
//       code to be executed if n=label2;
//       break;
//     case label3:
//       code to be executed if n=label3;
//       break;
//     ...
//     default:
//       code to be executed if n is different from all labels;
//   }

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    case "yellow":
        echo "Your favorite color is yellow!";
        break;
    default:
        echo "Your favorite color is neither red, blue, green, nor yellow!";
}

 

    ?>
</body>
</html>