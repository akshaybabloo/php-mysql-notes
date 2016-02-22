<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$var1 = 4.87;
$var2 = 6.47;
?>

Addition: <?php echo $var1 + $var2 ?><br>
Subtraction: <?php echo $var1 - $var2 ?><br>
Multiplication: <?php echo $var1 * $var2 ?><br>
Division: <?php echo $var1 / $var2 ?><br>
Reminder: <?php echo $var1 % $var2 ?><br>

<br>
<b>Functions</b><br>
Rounding: <?php echo round($var2, 1) ?><br>
Ceiling: <?php echo ceil($var2) // rounds up?><br>
Floor: <?php echo floor($var2) //rounds down ?><br>
</body>
</html>