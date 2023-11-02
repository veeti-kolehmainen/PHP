<?php 

    $totalPrice = 0;
    foreach($_POST["songs"] as $selectedOption) {
        $totalPrice += (float)$selectedOption;
    }
    echo "Yhteishinta: ".$totalPrice."€";
?>