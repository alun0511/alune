<?php

declare(strict_types=1);

require __DIR__ . '/arrays.php';


/*
IF
$_POST['randSound'] has a key push that value to the $_SESSION array.

This saves what the latest randomized sound is from the $_POST array.

+ Shuffles array $intervals which contains 'filename' and 'name' for comparison.
*/
if (array_key_exists('randSound', $_POST)) {
    shuffle($intervals);
    $_SESSION = ['randomizedSound' => $intervals[0]['name']];
}

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
