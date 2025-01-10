<?php

require("connect.php");
$conn = connectDB();

$sql = "SELECT * FROM users ORDER BY highscore DESC LIMIT 5";


// loop

// echo voor elke hoogste score een tr met de naam en de score, doe deze in de tabel