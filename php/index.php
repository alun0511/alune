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
                <?php compareGuess('prim') ?>
                <div class="sounds">
                    <ul>
                        <li>

                            <audio controls muted>
                                <source src="/audio/<?= $intervals[0] ?>" type="audio/mp3" />
                            </audio>

                            <form method="post">
                                <input type="submit" name="randSound" class="button" value="Randomize" />
                            </form>

                        </li>
                        <li>

                            <form method="post">
                                <input type="submit" name="prim" class="button" value="prim" />
                            </form>

                        </li>


                    </ul>
                </div>
            </section>
        </main>
        <footer></footer>
    </div>
</body>

</html>
<?php print_r($_SESSION) . '<br>';
