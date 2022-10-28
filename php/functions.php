<?php

declare(strict_types=1);

require __DIR__ . '/arrays.php';

// randomizes which mp3-files and what interval to compare the guess with.

shuffle($intervals);


function compareGuess($guess)
{
    if (array_key_exists($guess, $_POST)) {

        if ($_SESSION['randomizedSound'] === $guess) {
            echo "<p>OMG RÄTT!</p>";
        } else {
            echo "<p>OMG FEL!</p>";
        }
    }
}

/*
if $_POST['randSound'] has a key push that value to the $_SESSION array.
This saves what the latest randomized sound is from the $_POST array.
 */

if (array_key_exists('randSound', $_POST)) {
    $_SESSION = ['randomizedSound' => $intervals[0]['name']];
}
