<?php

function connectDB()
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "worlde";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn == false) {
        echo "gefaald";
        die(mysqli_connect_error());
    }

    return $conn;
}
