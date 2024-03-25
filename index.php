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
function sayMyName(){
    $_new_name = "David";
    echo "<br>";
    echo "My name is $_new_name";
}
// echo "My name is $_new_name";
// sayMyName();
//echo "$age, $_new_name";


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
$ninjasOne = array("shaun" => "black", "mario" => "orange", "sayName"=> sayMyName());
$ninjasOne["sayName"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PHP FILE</title>
</head>

<body>
    <h1>
        <?php echo "<br>";
        echo "My age is $age!";
        ?>
    </h1>
</body>

</html>