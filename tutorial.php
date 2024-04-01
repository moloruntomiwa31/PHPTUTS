<?php
echo "<br>";
// Strings
$age = 10;
$_new_name = "John";
$stringOne = "My name is";
$stringTwo = "David";
echo "$stringOne $stringTwo \"lmao\"";
echo "<br>";
echo $stringOne[0];
echo strlen($stringOne);
echo strtoupper($stringOne);
echo strtolower($stringOne);
echo str_replace("My", "Your", $stringOne);
echo strrev($stringTwo);
// Double quoted strings perform action on special characters.
// E.g. when there is a variable in the string, it returns the value of the variable:


// Numbers
$radius = 25;
$pi = 3.74;

// operation BIDMAS
echo 2 * (4 * 9) / 3;
echo "<br>";
// increment and decrement
echo $radius++;
echo $radius++;
echo floor($pi);
echo ceil($pi);
function sayMyName()
{
    $_new_name = "David";
    echo "<br>";
    echo "My name is $_new_name";
}

// idexed arrays
$peopleOne = ["shaun", "crystal", "ryu"];
$peopleOne[1] = "genesis";
$peopleTwo = array("ken", "chun-li");
echo $peopleTwo[1];
echo "<br>";
array_push($peopleOne, "energy");
echo count($peopleOne);
echo "<br>";
print_r($peopleOne);

// associative arrays
$ninjasOne = array("shaun" => "black", "mario" => "orange", "sayName" => sayMyName());
$ninjasOne["sayName"];

//multidimensional arrays
$blogs = array(["title" => "mario", "author" => "lorem", "likes" => 30], ["title" => "pablo", "author" => "chris", "likes" => 40]);
print_r($blogs[0]["title"]);
echo count($blogs);

$cars = array(
    array("Volvo", 20, 16),
    array("Masda", 15, 22),
    array("Toyota", 12, 10),
);
echo "<br>";
echo $cars[0][0] . " In stock, now selling at" . $cars[0][1] . ", with a discount of" . $cars[0][2] / 10;
echo "<br>";

// loops
// while loops
$i = 1;
while ($i < 6) {
    if ($i % 2 == 0) {
        echo $i;
    };
    $i++;
};
// for loops
for ($j = 0; $j < count($peopleOne); $j++) {
    echo $peopleOne[$j] . " <br>";
};
// for each loop
foreach ($peopleTwo as $people) {
    echo $people;
}

//conditional statements
$price = 20;
if ($price < 10) {
    echo "the condition is met";
} elseif ($price == 20) {
    echo "elseif condition is met";
} else {
    echo "the condition is not met";
}
echo " <br>";
foreach ($blogs as &$blog) {
    $blog["likes"] += 5;
}
print_r($blogs);

//functions
function addFive(&$value)
{
    $value += 5;
}
$num = 10;
addFive($num);
echo $num;

$char = 20;
function myFunc($char)
{
    global $char;
    echo $char += 10;
}
myFunc($char);
echo $char;

//Switch case
$favColor = "red";

switch ($favColor) {
    case "blue":
        echo "found blue";
        break;
    case "yellow":
        echo "found yellow";
        break;
    case "red":
        echo "found red";
        break;
    default:
        echo "no color found";
}

//require and include
echo "<br>";
include("ninjas.php");
//Include gives a warning when an error occurs and carries on with the code.
require("ninjas.php");
//Require gives a fatal error when an error occurs and stops the code from running.
echo "End of code";
/* Use require when the file is required by the application.

Use include when the file is not required and application should continue when file is not found.*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PHP FILE</title>
</head>

<body>

</body>

</html>