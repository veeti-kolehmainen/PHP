<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap year checker</title>
</head>
<body>
    <form method="GET">
        <label for="year">Type a year</label>
        <input type="text" name="year" id="year">
        <button>Submit</button>
    </form>

    <?php
        $year = $_GET["year"];
        if($year % 400 == 0) {
            echo "It's a leap year";
        } else if($year % 100 == 0) {
            echo "It's not a leap year";
        } else if($year % 4 == 0) {
            echo "It's a leap year";
        } else {
            echo "It's not a leap year";
        }
    ?>
</body>
</html>