<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedure No. 1</title>
</head>
<body>
    <?php
        $number = $_POST['number'];
        $number = (int)$number;
        if($number % 5 == 0){
            echo "The number $number is divisible by 5.";
        } else {
            echo "The number $number is not divisible by 5.";
        }
    ?>
    <br><br>
    
</body>
</html>