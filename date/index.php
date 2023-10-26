<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>How many days until christmas</title>
</head>
<body>
    
    <?php
        // $dayOfWeek = date("w");

        // switch ($dayOfWeek) {
        //     case 1:
        //         echo "It is Monday";
        //         break;
        //     case 2:
        //         echo "It is Tuesday";
        //         break;
        //     case 3:
        //         echo "It is Wednesday";
        //         break;
        //     case 4:
        //         echo "<p>It is Thursday</p>";
        //         break;
        //     case 5:
        //         echo "It is Friday";
        //         break;
        //     case 6:
        //         echo "It is Saturday";
        //         break;
        //     case 0:
        //         echo "It is Sunday";
        //         break;
        // }
        
        $isItLeapYear = date("L");
        $currentDay = date("z");
        if($isItLeapYear == 1) {
            if($currentDay <= 359) {
                $daysUntilChristmas = 359 - $currentDay;
                echo "It is currently ".$daysUntilChristmas." days until christmas!";
            } else {
                $daysUntilChristmas = 365 + (366 - $currentDay);
                echo "It is currently ".$daysUntilChristmas." days until christmas!";
            }
        } else {
            if($currentDay <= 358) {
                $daysUntilChristmas = 358 - $currentDay;
                echo "It is currently ".$daysUntilChristmas." days until christmas!";
            } else {
                $daysUntilChristmas = 365 + (365 - $currentDay);
                echo "It is currently ".$daysUntilChristmas." days until christmas!";
            }
        }
    ?>

</body>
</html>