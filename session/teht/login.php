<?php 
    session_start();
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;

    if($_SESSION["username"] == "Mikko" && $_SESSION["password"] == "Miekkakala") {
        header("Location: etusivu.php");
    } else {
        header("Location: index.html");
    }
?>