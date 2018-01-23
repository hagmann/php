<?php
/**
 * hagmann internet agentur gmbh
 * Muracher 5 | 6235 Winikon
 *
 * User: simon.hagmann
 * Date: 08.01.2018
 * Time: 20:55
 */


$servername = "localhost";
$username = "root";
$password = "root";


// PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE m2_pdo";

    $conn->exec($sql);
    echo 'Datenbank erfolgreich erstellt';

    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


