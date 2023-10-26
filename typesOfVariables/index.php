<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //String
        $name = 'Coding is fun';

        //Integer
        $num = 10;

        //Float
        $float = 10.1;

        //Boolean
        $boolean = true;
        // true = 1
        // false = 0

        //Array
        $viikonpäivät = array( "Sunnuntai", "Maanantai", "Tiistai", "Keskiviikko", "Torstai", "Perjantai", "Lauantai");
        $viikonPäivä = date("l");
        $viikkoNumero = date("w");
        echo $viikonPäivä." Toimii vaan käyttäen date('l') <br>";
        echo $viikonpäivät[$viikkoNumero]." Toimii myös jos käyttää 'viikonpäivät[date('w')]'. Sunnuntai pitää olla eka arrayssä."
    ?>
</body>
</html>