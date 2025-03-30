<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedure No. 2</title>
</head>
<body>
    <?php
        $grades = [(int)$_POST['first'], (int)$_POST['second'], (int)$_POST['third'], (int)$_POST['fourth'], (int)$_POST['fifth']];
        $count = 0;
        
        echo "First Grade: $grades[0]<br><br>";
        echo "Second Grade: $grades[1]<br><br>";
        echo "Third Grade: $grades[2]<br><br>";
        echo "Fourth Grade: $grades[3]<br><br>";
        echo "Fifth Grade: $grades[4]<br><br>";

        foreach ($grades as $grade) {
            if ($grade < 70) {
                $count++;
            }
        }
        if ($count > 0) {
            echo "You have $count failing grade/s.";
        } else {
            $average = array_sum($grades) / count($grades);
            echo "The average is $average.";
        }
    ?>
</body>
</html>