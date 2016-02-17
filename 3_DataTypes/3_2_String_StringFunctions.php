<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

$hello = "Hello";
$world = "World";

$fullString = $hello . " " . $world;

echo $fullString;

echo "<br>";
?>

<!--You can add multiple php tags and call a variable. -->

<?php

echo "$fullString my name is Akshay <br>"; // because the variable has $, it considers as PHP variable
echo "{$fullString}MyNameIsAkshay <br>"; // {} separates from other text
echo '$fullString my name is Akshay' // prints out literal

?>
<br><br>

<!--String functions-->

<?php
$first = "This is a string.";
$second = " This is also a string.";

$third = $first;
$third .= $second;

echo $third;
?>

<br>
Lower case: <?php echo strtolower($first); // converts to lower case ?> <br>
Upper case: <?php echo strtoupper($first); // converts to upper case ?> <br>
Upper case first: <?php echo ucfirst($first); // converts first letter of first word to upper case ?> <br>
Upper case word: <?php echo ucwords($first); // converts first letter of all words to upper case?> <br>

<br>

Length: <?php echo strlen($third); // prints string length ?><br>
Trim: <?php echo "A" . trim(" B C D "); // trims the space near first word and the last word ?><br>
Find: <?php echo strstr($third, "also"); // searches the string and prints the full string from that point ?><br>
Replace string: <?php echo str_replace("also", "is", $third); // replaces the string with the given string from the given string ?><br>

<br>

Repeat: <?php echo str_repeat($third, 3); // repeat the string 3 times ?><br>
Make substring: <?php echo substr($third, 2, 5); // print from 2nd position to 5th position ?><br>
Find position: <?php echo strpos($third, "is"); // position of the string ?><br>
Find characters: <?php echo strchr($third, "i"); // prints the char and everything after it. ?><br>
</body>
</html>