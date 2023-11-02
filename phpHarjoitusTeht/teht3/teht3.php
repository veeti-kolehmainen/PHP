<?php 
    $alaraja = $_POST["num1"];
    $ylaraja = $_POST["num2"];

    $count = 0;
    for($i = $alaraja; $i <= $ylaraja; $i++) {
        echo $i." ";
        $count++;
        if($count == 10) {
            echo "<br>";
            $count = 0;
        }
    }
?>