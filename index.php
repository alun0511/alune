<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
require './arrays.php';
require './functions.php';

?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pitch Practicer</title>
    <link rel="stylesheet" href="/styles/style.css" />
</head>

<body>
    <div class="grid">
        <div class="item1">
            <header>
                <h1>Gehövning</h1>
                <ol>
                    <li>Slumpa interval</li>
                    <li>Tryck play</li>
                    <li>Gissa intervallen</li>
                </ol>

                <form method="post">
                    <input type="submit" name="randSound" class="randomizeButton" value="Slumpa intervall" />
                </form>
            </header>
            <div class='<?= $feedback ?>'>

<audio controls>
    <source src="/audio/<?= $intervals[0]['filename'] ?>" type="audio/mp3" />
</audio>


</div>
            <div class="item2">
                <form method="get">
                    <div class="wrapper">
                        <input type="submit" name="guess" class="button" value="prim" />

                        <input type="submit" name="guess" class="button" value="sekund" />

                        <input type="submit" name="guess" class="button" value="ters" />

                        <input type="submit" name="guess" class="button" value="kvart" />

                        <input type="submit" name="guess" class="button" value="kvint" />

                        <input type="submit" name="guess" class="button" value="sext" />

                        <input type="submit" name="guess" class="button" value="septima" />

                        <input type="submit" name="guess" class="button" value="oktav" />
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script src="/script.js"></script>
</body>

</html>
