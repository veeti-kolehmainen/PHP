<?php

$sanat = file("sanat.txt");

$voitto = false;
$havio = false;

if (isset($_POST['arvaus'])) {
    $kayttajan_arvaus = strtolower($_POST['arvaus']);
    $arvattava_sana = strtolower($_POST['arvattava_sana']);

    if ($kayttajan_arvaus == $arvattava_sana) {
        $voitto = true;
    } else {
        $havio = true;
    }
}

if (!$voitto && !$havio) {
    $arvattava_sana = rtrim($sanat[array_rand($sanat)]);
    $sekoitettu_sana = str_shuffle($arvattava_sana);
}
?>

<?php
include "header.php";
if ($voitto) {

    include "youWon.php";

} elseif ($havio) {

    include "youLost.php";

} else {

    include "form.php";
}

if ($voitto || $havio) {

    include "playAgain.php";
}

if (isset($_POST['pelaa_uudelleen'])) {
    $arvattava_sana = rtrim($sanat[array_rand($sanat)]);
    $sekoitettu_sana = str_shuffle($arvattava_sana);
    $voitto = false;
    $havio = false;
}
?>
</body>

</html>