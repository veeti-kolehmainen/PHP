<?php 
    $hinta = $_POST["hinta"];
    $vero = $_POST["vero"];
    $kokonais = $hinta + (($vero / 100) * $hinta);

    echo "Hinta: ".$hinta."€ <br>";
    echo "Verokanta: ".$vero."% <br>";
    echo "Kokonais: ".$kokonais."€ <br>";
?>