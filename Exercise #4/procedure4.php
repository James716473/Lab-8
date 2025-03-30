<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = (int)$_POST['a'];
        $b = (int)$_POST['b'];
        $c = (int)$_POST['c'];
        echo "a = $a <br><br> b = $b <br><br> c = $c <br><br>";
        if($a + $b > $c && $a + $c > $b && $b + $c > $a){
            $s = ($a + $b + $c) / 2;
            $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
            echo "The sides satisfies the Triangle Inequality Theorem. The semi-perimeter is $s units and the area is $area units.";
        } else if($a == 0 || $b == 0 || $c == 0){
            echo "Not a triangle. No area to show.";
        } else if($a < 0 || $b < 0 || $c < 0){
            echo "Not a triangle. No area to show.";
        } else {
            echo "Not a triangle. No area to show.";
        }
    ?>
</body>
</html>