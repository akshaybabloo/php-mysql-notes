<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$var1 = null; // can also be written as NULL
$var2 = "";
?>

var1 null? <?php echo is_null($var1) ?> <br>
var2 null? <?php echo is_null($var2) ?> <br>
var3 null? <?php echo is_null($var3) ?> <br>
<br>
var1 set? <?php echo isset($var1) ?> <br>
var1 set? <?php echo isset($var2) ?> <br>
var1 set? <?php echo isset($var3) ?> <br>
<br>
<?php $var3 = "0"; ?>
var1 empty? <?php echo empty($var1) ?> <br>
var1 empty? <?php echo empty($var2) ?> <br>
var1 empty? <?php echo empty($var3) ?> <br>

</body>
</html>