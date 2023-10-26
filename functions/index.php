<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="charCount">
        <button>Submit</button>
    </form>
<?php
    // echo strlen("Hi Daniel")."<br>";
    // echo str_word_count("Hi Daniel")."<br>";
    // echo strrev("Hi Daniel")."<br>";
    // echo strpos("Hi Daniel", "Daniel")."<br>";
    // echo str_replace("Daniel", "Jason", "Hi Daniel")."<br>";

    $characters = $_GET["charCount"];
    echo strlen("$characters")." Is the length of your text";
?>
</body>
</html>