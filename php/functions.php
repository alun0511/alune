<?php

declare(strict_types=1);

require __DIR__ . '/arrays.php';




if (array_key_exists('randSound', $_POST)) {
    shuffle($intervals);
    $_SESSION = ['randomizedSound' => $intervals[0]['name']];
}

/*
IF
$_POST['randSound'] has a key push that value to the $_SESSION array.

This saves what the latest randomized sound is from the $_POST array.

+ Shuffles array $intervals which contains 'filename' and 'name' for comparison.
*/

function compareGuess()
{
    if (array_key_exists('guess', $_GET)) {
        if ($_SESSION['randomizedSound'] === $_GET['guess']) {
            return true;
        } else {
            return false;
        }
    }
}

/* compares value of pressed button
 */



$feedback = 'default';

if (array_key_exists('guess', $_GET)) {

    $correctGuess = compareGuess($_GET['guess']);

    if ($correctGuess) {
        $feedback = 'correct';
    } else {
        $feedback = 'incorrect';
    }
}

// sets class of div to display feedback of guess - 'default', 'correct' and 'incorrect'


if (array_key_exists('randSound', $_POST)) {
    $feedback = 'default';
}

//resets $feedback to 'default' whenever randomize interval is pressed
