<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
</head>
<body>
    <form method="GET">
        <label for="num">Kirjoita luku</label>
        <input type="text" name="num" id="num">
        <button>Submit</button>
    </form>

    <?php
        // $x = 10;
        // $y = 1;

        // if($x <> $y) {
        //     echo "True!";
        // }
        // else {
        //     echo "False!";
        // }

        $num = $_GET["num"];
        if($num > 5) {
            echo "Luku oli suurempi";
        } else {
            echo "Pienempi luku annettu";
        }
    ?>
    <hr>
    <form>
        <label for="num2">Kirjoita luku</label>
        <input type="text" name="num2" id="num2">
        <button>Submit</button>
    </form>
    <?php
        $num2 = $_GET["num2"];
        if($num2 == 5) {
            echo "Numero on 5";
        } else if ($num2 < 5) {
            echo "Numero on pienempi kuin 5";
        } else {
            echo "Numero on suurempi kuin 5";
        }
    ?>
</body>
</html>