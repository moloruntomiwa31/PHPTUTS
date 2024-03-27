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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PHP FILE</title>
</head>

<body>
    <h1>Products</h1>
    <ul>
        <?php
        foreach ($ninjasOne as $x => $y) { ?>
            <li>
                <h3><?php echo $x . " " . $y; ?></h3>
            </li>
        <?php } ?>
    </ul>
</body>

</html>