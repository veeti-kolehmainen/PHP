<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="GET">
    <input type="number" name="num">
    <button>SUBMIT</button>
</form>
    <?php 
        $num = $_GET["num"];
        echo $num + (rand(1, 10));
    ?>
</body>
</html>