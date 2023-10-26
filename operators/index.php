<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <form method="GET">
        <label for="num1">Type a number</label>
        <input type="number" name="num1" id="num1">
        <br>
        <label for="num2">Type another number</label>
        <input type="number" name="num2" id="num2">
        <br>
        <button>Get remainder</button>
    </form>
    <?php
    // + - * / % **
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        echo $num1 % $num2;
    ?>
</body>
</html>