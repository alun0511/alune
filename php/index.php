<?php

session_start();
require __DIR__ . '/arrays.php';
require __DIR__ . '/functions.php';



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
                <h1>Pitch Practicer</h1>
                <p>Pitch dont kill my vibe</p>

                <form method="post">
                    <input type="submit" name="randSound" class="randomizeButton" value="Randomize interval" />
                </form>
                <div class='<?= $feedback ?>'>



                </div>
            </header>

            <audio controls muted>
                <source src="/audio/<?= $intervals[0]['filename'] ?>" type="audio/mp3" />
            </audio>
        </div>
        <div class="item2">
            <form method="get">

                <input type="submit" name="guess" class="button" value="prim" />

                <input type="submit" name="guess" class="button" value="sekund" />

                <input type="submit" name="guess" class="button" value="ters" />

                <input type="submit" name="guess" class="button" value="kvart" />

                <input type="submit" name="guess" class="button" value="kvint" />

                <input type="submit" name="guess" class="button" value="sext" />

                <input type="submit" name="guess" class="button" value="septima" />

                <input type="submit" name="guess" class="button" value="oktav" />

            </form>
        </div>
    </div>
</body>

</html>

<?php

/*
echo $_SESSION['randomizedSound'] . '<br>';
echo $_GET['guess']; */
