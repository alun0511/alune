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
        <header>
            <h1>Pitch Practicer</h1>
            <p>Pitch dont kill my vibe</p>
        </header>
        <main>
            <section>
                <div class="feedbackPHP">
                    <?php
                    compareGuess('prim');
                    compareGuess('sekund');
                    compareGuess('ters');
                    compareGuess('kvart');
                    compareGuess('kvint');
                    compareGuess('sext');
                    compareGuess('septima');
                    compareGuess('oktav');
                    ?>
                </div>
                <audio controls muted>
                    <source src="/audio/<?= $intervals[0]['filename'] ?>" type="audio/mp3" />
                </audio>
            </section>

            <div class="intervals">
                <form method="post">

                    <input type="submit" name="randSound" class="randomizeButton" value="Randomize interval" />

                    <input type="submit" name="prim" class="button" value="Prim" />

                    <input type="submit" name="sekund" class="button" value="Sekund" />

                    <input type="submit" name="ters" class="button" value="Ters" />

                    <input type="submit" name="kvart" class="button" value="Kvart" />

                    <input type="submit" name="kvint" class="button" value="Kvint" />

                    <input type="submit" name="sext" class="button" value="Sext" />

                    <input type="submit" name="septima" class="button" value="Septima" />

                    <input type="submit" name="oktav" class="button" value="Oktav" />

                </form>
            </div>
        </main>
        <footer></footer>
    </div>
</body>

</html>

<?php

print_r($_SESSION) . '<br>';
print_r($_POST) . '<br>';
