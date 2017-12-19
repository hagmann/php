<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Foundation for Sites</title>
</head>
<body>
<?php
//Funktionen

function helloWorld()
{
    return 'Hello World';
}
//echo helloWorld();


function helloWorldWithParam($param)
{
    return 'Hello ' . $param;
}

//echo helloWorldWithParam('World');


function addieren($a, $b)
{
    return $a + $b;
}

//echo addieren(3, 5);


function hallo($text = 'Welt')
{
    return 'Hallo ' . $text . '!';
}

//echo hallo();



// Date auf deutsch übersetzen (nur XAMPP)
setlocale(LC_TIME, 'de_DE', 'deu_deu');
function wasIstHeute() {
    echo 'Heute ist ' . strftime('%A', mktime());
}
echo wasIstHeute();

?>
</body>
</html>
