<html>
<head>
    <meta charset="utf-8"/>
    <title>PDO</title>
</head>
<body>

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
$password = "";


// PDO
try {
<<<<<<< HEAD
    $conn = new PDO("mysql:host=$servername;charset=utf8", $username, $password);
=======
    $conn = new PDO("mysql:host=$servername;dbname=datenbank1", $username, $password);
>>>>>>> 4bf4e2394a200293fadc5a689c7afe3353eb040d
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->exec('CREATE DATABASE IF NOT EXISTS m2_pdo DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci');
    $conn->exec('use m2_pdo');

    echo "Connected successfully<br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}


$sql = "CREATE TABLE IF NOT EXISTS users (
  id INTEGER PRIMARY KEY NOT NULL auto_increment,
  vorname VARCHAR(64),
  nachname VARCHAR(64),
  email VARCHAR(128) NOT NULL UNIQUE ,
  password VARCHAR(256),
  createdAt DATE
);";

$conn->exec($sql);
echo "Tabelle user erstellt<br>";


try {
    // Werte in Tabelle einfügen
    $sql = "INSERT INTO users (vorname, nachname, email, password, createdAt) VALUES ('Markus', 'Müller', 'info@example.com', md5(1234), NOW())";
    $conn->exec($sql);
    echo "User erstellt<br>";
} catch(PDOException $e) {
    echo $e->getMessage() . '<br>';
}



<<<<<<< HEAD
// Werte über Prepared Statement in Tabelle einfügen
$pers = [
    'vorname' => 'Max',
    'nachname' => 'Müller',
    'email' => 'info2@example.com',
    'password' => MD5(1234)
];

try {
    $stmt = $conn->prepare("INSERT INTO users ( vorname, nachname, email, password, createdAt) VALUES (:vorname, :nachname, :email, :password, NOW())");
    $stmt->bindParam(':vorname', $pers['vorname']);
    $stmt->bindParam(':nachname', $pers['nachname']);
    $stmt->bindParam(':email', $pers['email']);
    $stmt->bindParam(':password', $pers['password']);

    $stmt->execute();
    echo "User erstellt<br>";
} catch(PDOException $e) {
    echo $e->getMessage();
}


// Alle Benutzer abfragen
$sql = "SELECT * from users";
$cmd = $conn->prepare($sql);
$cmd->execute();

echo '<ul>';
while ($zeile = $cmd->fetch(PDO::FETCH_OBJ)) {
    echo '<li>' . $zeile->vorname .'</li>';
}
echo '</ul>';
?>

</body>
</html>
=======
$sql = 'SELECT * from users';
$users = $conn->query($sql);

echo '<ul>';
foreach($users as $user) {
//	var_dump($user);
	echo '<li>' . $user['vorname'] . ' ' . $user['nachname'] . '</li>';
}
echo '</ul>';


>>>>>>> 4bf4e2394a200293fadc5a689c7afe3353eb040d
