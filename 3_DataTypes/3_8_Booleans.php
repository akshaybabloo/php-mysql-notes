<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$var1 = true; // can also be written as - TRUE
$var2 = false;// can also be written as - FALSE
?>

True: <?php echo $var1; ?> <br>
False: <?php echo $var2; ?> <br>

Is $var2 a Boolean? <?php echo is_bool($var2); ?>
</body>
</html>