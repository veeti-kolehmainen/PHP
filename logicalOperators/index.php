<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>
<body>
    
    <form method="GET">
        <label for="num">Type a number</label>
        <input type="text" name="num" id="num">
        <br>
        <label for="num2">Type another number</label>
        <input type="text" name="num2" id="num2">
        <br>
        <button>Submit</button>
    </form>
    <?php
        // $x = 10;
        // $y = 20;

        // if($x == $y xor 1 == 1) {
        //     echo "True";
        // }

        $num = $_GET["num"];
        $num2 = $_GET["num2"];
        if($num % 2 == 0 && $num2 % 2 == 0) {
            echo "The numbers are even";
        } else {
            echo "The number aren't even";
        }
    ?>
</body>
</html>