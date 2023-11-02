<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teht1</title>
</head>
<body>
    <?php 
        for($x = 1; $x <= 100; $x++) {
            if($x % 10 == 0) {
                echo "<b>".$x."</b><br>";
            } else {
                echo $x."<br>";
            }
        }
    ?>

</body>
</html>