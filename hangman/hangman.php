<?php 
    include "header.php";


    if (!isset($_SESSION["word"])) {
        $words = file("words.txt");
        $word = rtrim(strtoupper($words[array_rand($words)]));
        $_SESSION["word"] = $word;
        $_SESSION["guesses"] = [];
        $_SESSION["lives"] = 6;
        if (!isset($_SESSION["gamesWon"])) {
            $_SESSION["gamesWon"] = 0;
        }
        if (!isset($_SESSION["gamesLost"])) {
            $_SESSION["gamesLost"] = 0;
        }
    }
    
    if (isset($_POST["guess"])) {
        if (!in_array($_POST["guess"], $_SESSION["guesses"])) {
            if (strpos($_SESSION["word"], $_POST["guess"]) === false) {
                $_SESSION["lives"]--;
            }
            $_SESSION["guesses"][] = $_POST["guess"];
        } else {
            echo "You have already guessed that letter<br>";
        }
    }
    
    $remainingLetters = array_diff(range("A", "Z"), $_SESSION["guesses"]);
    
    if ($_SESSION["lives"] <= 0) {
        echo "You lost!<br>";
        echo "The word was " . $_SESSION["word"];
        $_SESSION["gamesLost"]++;
        unset($_SESSION["word"]);
    } else {
        $lettersLeftToGuess = 0;
        $currentStateOfPlay = "";
        $wordLength = strlen($_SESSION["word"]);
        for ($i = 0; $i < $wordLength; $i++) {
            if (in_array($_SESSION["word"][$i], $_SESSION["guesses"])) {
                $currentStateOfPlay .= $_SESSION["word"][$i];
            } else {
                $currentStateOfPlay .= "_";
                $lettersLeftToGuess++;
            }
            $currentStateOfPlay .= " ";
        }
    
        ?>

        <div class="text-center" id="currentStateOfPlay">
            <h1><?php echo $currentStateOfPlay; ?></h1>
        </div>

        <?php

        if ($lettersLeftToGuess == 0) {
            echo "You won!";
            $_SESSION["gamesWon"]++;
            unset($_SESSION["word"]);
        }
    }
    
    if ($_SESSION["lives"] != 0 && $lettersLeftToGuess != 0) {
    ?>
        <form method="post" action="">
            <select name="guess">
                <?php
                foreach ($remainingLetters as $letter) {
                    echo '<option value="' . strtoupper($letter) . '">' . strtoupper($letter) . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="submit" value="GUESS">
        </form>
    <?php
    }
    include "footer.php";
?>