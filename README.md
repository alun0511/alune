![synth-cat](https://i.giphy.com/media/Hcw7rjsIsHcmk/giphy.webp)

# Pitch Practicer

This website helps you learn how to recognize different intervals.

Check it out at https://www.alune.se/index.php! :fire: :musical_keyboard: :fire:

# Code Review

Code review written by [Gustav Enoksson](https://github.com/GustavE).

1. `index.php:23-34` - Fundera på att ha Header tag utanför Div=class"grid". Kanske att Div=class"grid" skulle kunna vara en Section tag istället.
2. `functions.php` - Svårläst när if satser ej ligger i funktioner, fundera på att lägga dessa i funktioner med förklarande namn.
3. `index.php:67` - Du länkar till en .js fil men kan ej hitta filen i projektet.
4. `style.css` - På din Body använder du display flex, fundera på att i stället wrappa ditt innehåll på sidan med en Main tag där applicera din flexbox.
5. `index.php` - Du använder dig av bra kommentarer i din functions.php fil men fundera att lägga till kommentarer även på index.php då du använder dig av variabler som ändrar värde.

# Testers

Tested by the following people:

1. Simon Lövbacka
2. Robin Persson
