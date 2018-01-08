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


// MySQLi
$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
    die('Verbindung fehlgeschlagen: ' . $conn->connect_error);
}
echo 'Verbindung erfolgreich hergestellt';