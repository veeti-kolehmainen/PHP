<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teht2</title>
</head>
<body>
    <form method="GET">
        <label for="num">Type a number: </label>
        <input type="number" name="num" id="num">
        <br>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
    <?php 
    if(isset($_GET["submit"])) {
        $num = $_GET["num"];

        echo $num;
        echo "<table border='1'>";
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . ($num * $j) . "</td>";
        }
        echo "</tr>";
        echo "</table>";
    }
    ?>

</body>
</html>