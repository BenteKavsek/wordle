<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <title>WORDLE</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main class="main">

        <section class="name__sec">
            <h2 class="name__text">Vul je naam in om te beginnen:</h2>
            <form method="POST" action="game.php">
                <input class="name__input" type="text" name="name" id="name">
                <input class="start__button" type="submit" name="submit" value="Begin!">
            </form>
        </section>

    </main>
    <footer>

    </footer>

</body>

</html>