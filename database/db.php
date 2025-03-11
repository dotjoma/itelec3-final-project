<?php
    $host = "localhost";
    $database = "itelec3finals";
    $username = "root";
    $password = "";
    $dsn = "mysql:host=$host;dbname=$database";

    try {
        $con = new PDO($dsn, $username, $password);
        // echo "Connected to database.";
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
?>