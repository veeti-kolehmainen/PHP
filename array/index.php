<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    
    $numbers_length = count($numbers);

    for($i = 0; $i < $numbers_length; $i++) {
        echo $numbers[$i]." ";
    }
    echo "<hr>";
    for($i = $numbers_length - 1; $i >= 0; $i--) {
        if($numbers[$i] % 2 == 0) {
            echo $numbers[$i]. " ";
        }
    }
    ?>

</body>
</html>