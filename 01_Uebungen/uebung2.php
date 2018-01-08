<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Foundation for Sites</title>
</head>
<body>
<?php
// Array
// Repetition: Key-Value erklären
// http://php.net/manual/en/language.types.array.php


// Einfache Liste
$pers = [
    'Max',
    'Julian',
    'Jonas',
    'Anna',
    'Lisa'
];

// Eintrag hinzufügen
$pers[] = 'Julia';

// Eintrag mit Key entfernen
unset($pers[0]);

// Eintrag mit Value entfernen
var_dump(array_search('Jonas', $pers));
if (($key = array_search('Jonas', $pers)) !== false) {
    unset($pers[$key]);
}

// Letzten Eintrag entfernen
array_pop($pers);

// Array Keys zurücksetzen
$pers = array_values($pers);
var_dump($pers);

// Liste generieren
echo '<ul>';
foreach ($pers as $p) {
    echo '<li>' . $p . '</li>';
}
echo '</ul>';


// Array Inhalt anzeigen
// Pre erklären
echo '<pre>';
var_dump($pers);
echo '</pre>';


// Array Key/Value
$person = [
    'Vorname' => 'Max',
    'Nachname' => 'Muster',
    'Newsletter' => false
];

// Neuer Array Eintrag
$person[] = 123;

// Strasse ergänzen
$person['strasse'] = 'Musterstrasse 3';

//var_dump($person);


// Foreach
echo '<ul>';
foreach ($person as $p) {
    echo '<li>' . $p . '</li>';
}
echo '</ul>';


echo '<pre>';
var_dump($person);
echo '</pre>';


// Foreach - Personenliste
echo '<ul>';
foreach ($person as $value => $key) {
    echo '<li>' . $value . ': ' . $key . '</li>';
}
echo '</ul>';


// Personenliste mit mehreren Einträgen

$personen = [
    [
        'Vorname' => 'Max',
        'Nachname' => 'Muster'
    ],
    [
        'Vorname' => 'Julian',
        'Nachname' => 'Koch'
    ],
    [
        'Vorname' => 'Lisa',
        'Nachname' => 'Bucher'
    ]
];


//while($personen) {
//    var_dump($personen);
//}


// Switch Anweisung

$i = 2;

switch ($i) {
    case 0:
        echo 'A ist 0' . '<br>';
    case 1:
        echo 'A ist 1' . '<br>';
    case 2:
        echo 'A ist 2' . '<br>';
}


switch ($i) {
    case 0:
        echo 'A ist 0' . '<br>';
        break;
    case 1:
        echo 'A ist 1' . '<br>';
        break;
    case 2:
        echo 'A ist 2' . '<br>';
        break;
    default:
        echo 'keine der Fälle trifft zu';
}


// For Schleife
$i = 1;
for ($i = 0; $i < 10; $i++) {
    echo "Das ist Zeile $i<br>";
}

echo '<hr>';

// Unterschied aufzeigen - Increment erst nach erstem Durchlauf
$i = 1;
while ($i < 10) {
    echo "Das ist Zeile $i<br>";
    $i++;
}


while ($i < 10):
    echo "Das ist Zeile $i<br>";
    $i++;
endwhile;


?>

</body>
</html>
