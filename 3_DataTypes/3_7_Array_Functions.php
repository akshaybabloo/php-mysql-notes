<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php $someArray = array(3,67,5,7,8,9,2); ?>

Count: <?php echo count($someArray); ?> <br>
Maximum number: <?php echo max($someArray); ?> <br>
Minimum number: <?php echo min($someArray); ?> <br>
<pre>
Sort: <?php sort($someArray); print_r($someArray); ?> <br>
Reverse Sort: <?php rsort($someArray); print_r($someArray); ?> <br>
</pre>
Implode: <?php echo $implodeString = implode(" - ", $someArray); ?> <br>
<pre>
Explode: <?php $explodeArray = explode(" - ", $implodeString); print_r($explodeArray) ?> <br>
</pre>

</body>
</html>