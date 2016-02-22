<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$someArray = array("first_name" => "Akshay", "last_name" => "Gollahalli");

echo $someArray["first_name"];
?>

<pre>
    <?php print_r($someArray); ?>
</pre>
<br>

<?php echo "My Full name is {$someArray["first_name"]} {$someArray["last_name"]}" ?>
<br>
<?php
$newArray = [1, 2, 3, 4];
$newArray1 = [0 => 1, 1 => 2, 2 => 3, 3 => 4];
echo $newArray[0]."<br>";
echo $newArray1[0];
?>

<br>
$newArray is equal to $newArray1
<pre>
    <?php print_r($newArray) ?><br>
    <?php print_r($newArray1) ?>
</pre>
</body>
</html>