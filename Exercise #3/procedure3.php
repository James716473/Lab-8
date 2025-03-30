<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedure No. 3</title>
</head>
<body>
    <?php
        $a = (int)$_POST['a'];
        $b = (int)$_POST['b'];
        $c = (int)$_POST['c'];
        $d = ($b * $b) - (4 * $a * $c);
        echo "a = $a <br><br> b = $b <br><br> c = $c <br><br>";
        if($d == 0){
            $x = (-$b + sqrt($d)) / (2 * $a);
            echo "Number of real roots: 1<br>";
            echo "Real root: $x<br>";
        } else if($d > 0){
            $x = (-$b + sqrt($d)) / (2 * $a);
            $y = (-$b - sqrt($d)) / (2 * $a);
            echo "Number of real roots: 2<br>";
            echo "Real roots: $x, $y<br>";
        } else {
            echo "No real roots.<br>";
        }
    ?>
</body>
</html>