<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// while loop
// while(condition is true){
//     code to be executed;
// }

$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
};

// do while loop
// do{
//     code to be executed;
// }while(condition is true);
echo "<br>";
$x = 1;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

// for loop
// for (init counter; test counter; increment counter) {
//     code to be executed for each iteration;
//   }

echo "<br>";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  };

?>
</body>
</html>