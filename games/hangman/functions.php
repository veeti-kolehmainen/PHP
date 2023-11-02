<?php

session_start();

if (isset($_POST['guess'])) {
    dealWithGuess();
}

if (isset($_POST['resetScoreboard'])) {
    resetScoreboard();
}


function setUpGame()
{
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
        if (!isset($_SESSION["correctGuesses"])) {
            $_SESSION["correctGuesses"] = 0;
        }
        if (!isset($_SESSION["incorrectGuesses"])) {
            $_SESSION["incorrectGuesses"] = 0;
        }
    }
}

function dealWithGuess()
{
    if (isset($_POST["guess"])) {
        if (!in_array($_POST["guess"], $_SESSION["guesses"])) {
            if (strpos($_SESSION["word"], $_POST["guess"]) === false) {
                $_SESSION["lives"]--;
                $_SESSION["incorrectGuesses"]++;
            } else {
                $_SESSION["correctGuesses"]++;
            }
            $_SESSION["guesses"][] = $_POST["guess"];
        } else {
            // echo "You have already guessed that letter<br>";
            alert("You have already guessed that letter");
        }
    }
}

function currentStateOfPlay()
{
    $_SESSION["lettersLeftToGuess"] = 0;
    $currentStateOfPlay = "";
    $wordLength = strlen($_SESSION["word"]);
    for ($i = 0; $i < $wordLength; $i++) {
        if (in_array($_SESSION["word"][$i], $_SESSION["guesses"])) {
            $currentStateOfPlay .= $_SESSION["word"][$i];
        } else {
            $currentStateOfPlay .= "_";
            $_SESSION["lettersLeftToGuess"]++;
        }
        $currentStateOfPlay .= " ";
    }
    return $currentStateOfPlay;
}

function youWon()
{
    if ($_SESSION["lettersLeftToGuess"] == 0) {

        include "youWon.php";

        $_SESSION["gamesWon"]++;
        unset($_SESSION["word"]);
    }
}

function youLost()
{
    $_SESSION["gamesLost"]++;
    unset($_SESSION["word"]);
}

function remainingLetters()
{
    $remainingLetters = array_diff(range("A", "Z"), $_SESSION["guesses"]);
    return $remainingLetters;
}

function alert($message)
{
    include "alert.php";
    return;
}

function resetScoreboard()
{
    if (isset($_POST["resetScoreboard"])) {
        $_SESSION["correctGuesses"] = 0;
        $_SESSION["incorrectGuesses"] = 0;
        $_SESSION["gamesWon"] = 0;
        $_SESSION["gamesLost"] = 0;
        header("Location: hangman.php");
    }
}

function getRating()
{
    $correctGuesses = $_SESSION["correctGuesses"];
    $incorrectGuesses = $_SESSION["incorrectGuesses"];
    $totalGuesses = $correctGuesses + $incorrectGuesses;
    $rating = "";
    if ($correctGuesses != 0 && $totalGuesses != 0) {
        $rating = $correctGuesses / $totalGuesses;
    } else {
        $rating = 0;
    }
    $grade = [
        [0.8, "A", "success"],
        [0.6, "B", "info"],
        [0.4, "C", "warning"],
        [0.2, "D", "danger"],
        [0, "E", "danger"]
    ];
    if ($totalGuesses > 0) {
        for ($i = 0; $i < 5; $i++) {
            if ($rating >= $grade[$i][0]) {
                return $grade = [$grade[$i][1], $grade[$i][2]];
            }
        }
    } else {
        return $grade = ["N/A", "secondary"];
    }
}
