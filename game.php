<?php
require("database/connect.php");
$conn = connectDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';

    $stmt = $conn->prepare("INSERT INTO users (name, highscore) VALUES (?, '')");
    $stmt->bind_param("s", $name);
    $stmt->execute();

    $stmt->close();
}
?>

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
    <script src="js/script.js" defer></script>
</head>

<body>
    <main class="main">
        <section class="board">
            <h2 class="title">
                <div>
                    <span>P</span>
                    <span>L</span>
                    <span>A</span>
                    <span>Y</span>
                </div>

                <div>
                    <span>W</span>
                    <span>O</span>
                    <span>R</span>
                    <span>D</span>
                    <span>L</span>
                    <span>E</span>
                </div>
            </h2>

            <section class="play__board">

                <div class=" input-row row1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                </div>

                <div class=" input-row row2">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                </div>

                <div class="input-row row3">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                </div>

                <div class="input-row row4">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                </div>

                <div class="input-row row5">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                </div>

                <div class="input-row row6">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                    <input class="tile" id=input type="text" maxlength="1">
                </div>



            </section>

        </section>
        <section class="sidebar">
            <article class="scoreboard">

                <h5>Player: <?php echo $name ?></h5>

                <h2 class="score__title">Scoreboard</h2>

                <?php

                $selectQuery = "SELECT name, highscore
                FROM `users` WHERE highscore > 0 ORDER BY highscore DESC;";

                $show = mysqli_query($conn, $selectQuery);

                $results = array();
                if (mysqli_num_rows($show) > 0) {
                    while ($row = mysqli_fetch_assoc($show)) {
                        array_push($results, $row);
                    }
                }

                echo "<table>";
                echo "<tr>";
                echo "<td class='table__data'>Naam</td>";
                echo "<td class='table__data'>Highscore</td>";
                echo "</tr>";
                foreach ($results as $result) {
                    echo "<tr>";
                    echo "<td class='table__data'>$result[name]</td>";
                    echo "<td class='table__data'>$result[highscore]</td>";
                    echo "</tr>";
                }
                echo "</table>";

                ?>

            </article>
        </section>




    </main>

    <footer>

    </footer>

</body>

</html>