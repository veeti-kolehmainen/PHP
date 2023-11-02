<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Functions</title>
</head>

<body>

    <form method="GET">
        <label for="rahasumma">Rahasumma: </label>
        <input type="text" name="rahasumma" id="rahasumma">
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>

    <?php

    if(isset($_GET["submit"])) {
        function AlvCalc($raha)
        {
            $newNum = $raha * 0.24;
            echo "ALV: " . $newNum . "€";
        }
        $x = $_GET["rahasumma"];
        AlvCalc($x);
    } else {
        echo "Kirjoita summa ylös";
    }
    ?>
</body>

</html>