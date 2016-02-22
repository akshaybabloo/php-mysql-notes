<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

$someArray = array(0, 1, 2, 3, 4, 5, 6, 7);
echo $someArray[0];

?>
<br>
<?php

$mixedArray = array(0, "one", array(2, "three"));
echo $mixedArray[2][0];

?>

<br>

<?php $mixedArray[3] = "four" // adds the string at index 3 ?><br>
<?php $mixedArray[] = 5 // appends to the array ?>

<pre>
<?php print_r($mixedArray); ?>
</pre>

<?php
// from PHP 5.4 you can assign arrays as

$newArray = [1, 2, 3];
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>

</body>
</html>