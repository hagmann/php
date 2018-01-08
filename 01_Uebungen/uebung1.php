<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Foundation for Sites</title>
</head>
<body>

<?php

// Variablen deklarieren
$vorname = 'Max';
$nachname = 'Muster';

// Variable erweitern
$nachname .= 'mann';

// Variable zusammensetzen
$name = $vorname . ' ' . $nachname;
echo 'Mein Name ist ' . $name . '<br>';

// Alternative Schreibweise
echo "Mein Name ist $name" . '<br>';


// Arithmetische Operationen
$a = 4;
$b = 2;

echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo pow($a, $b) . '<br>';
echo sqrt(64);

$resultat = $a + $b;
echo $resultat;

//oder
echo $a + $b;

echo '<hr>';

//Dekrementieren und Inkrementieren
$a++;

//Variante 2
$a += 1;
echo $a;


//Ungleiche Datentypen (Casting von Datentypen)
$a = (float)4;
$b = (int)4;


// If-Abfrage
if ($a === $b) {
    echo 'Die Werte sind gleich!';
} elseif ($a == $b) {
    echo 'Die Werte sind gleich, aber nicht der Datentyp';
} else {
    echo 'Die Werte sind nicht gleich!';
}



// Alternative Schreibweise, mit HTML kombiniert:
if ($a === $b): ?>
    <p>A ist gleich B</p>
<?php else: ?>
    <p>A ist nicht gleich B</p>
<?php endif; ?>


<?php (1 == 3) ? 'yes' : 'no'; ?>

</body>
</html>
