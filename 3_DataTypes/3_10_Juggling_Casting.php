<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<b>Type Juggling</b><br>

<?php $var1 = "10"; ?>

Get Type for $var1: <?php echo gettype($var1); ?><br>
Adding to $var1: <?php echo $var1 += 5; ?><br>
Get type for $var1: <?php echo gettype($var1); ?><br>

<br>

Convert to string: <?php echo $convertString = "this is number " . $var1; ?><br>
Type: <?php echo gettype($convertString); ?><br>
<br>

<b>Type Casting</b><br>


Type of $var1: <?php echo gettype($var1); ?> <br>
Convert $var1 to string: <?php settype($var1, "string"); echo $var1 ?> <br>
Type of $var1: <?php echo gettype($var1); ?><br>
<br>

Convert $var1 to integer: <?php $var2 = (integer) $var1; echo $var2; ?><br>
Get type of $var1: <?php echo gettype($var2); ?>
</body>
</html>