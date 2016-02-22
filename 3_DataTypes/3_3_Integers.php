<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$var1 = 4;
$var2 = 6;
?>

Addition: <?php echo $var1 + $var2 ?><br>
Subtraction: <?php echo $var1 - $var2 ?><br>
Multiplication: <?php echo $var1 * $var2 ?><br>
Division: <?php echo $var1 / $var2 ?><br>
Reminder: <?php echo $var1 % $var2 ?><br>

<br>

<b>Functions</b><br>

Square root: <?php echo sqrt(25) // Square root ?><br>
Exponential: <?php  echo pow(2, 25) // power of a number ?><br>
Modulo: <?php echo fmod(30,8) // remainder ?><br>
Random: <?php echo rand() // random number generator ?><br>
Random (min,max): <?php echo rand(5,10) // random number generator bewteen 5 and 10 ?><br>
Absolute value: <?php echo abs(10-644) // Absolute value of a number ?><br>

<br>

+= : <?php $var2 += 5; echo $var2 // $var2 = $var2 + 5 ?><br>
-= : <?php $var2 -= 5; echo $var2 // $var2 = $var2 - 5 ?><br>
*= : <?php $var2 *= 5; echo $var2 // $var2 = $var2 * 5 ?><br>
/= : <?php $var2 /= 5; echo $var2 // $var2 = $var2 / 5 ?><br>

<br>

++ : <?php $var2++; echo $var2 // increment +1 ?><br>
-- : <?php $var2--; echo $var2 // decrement +1 ?><br>

</body>
</html>
