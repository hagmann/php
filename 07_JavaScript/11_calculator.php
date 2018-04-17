<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>JavaScript</title>

</head>
<body>
<h1>Volumen Rechner</h1>

<label for="breite">Breite</label>
<input type="number" name="breite" id="breite">

<label for="laenge">Länge</label>
<input type="number" name="laenge" id="laenge">

<label for="hoehe">Höhe</label>
<input type="number" name="hoehe" id="hoehe">

<button onclick="berechnen()">Berechnen</button>

<label for="volume">Volumen</label>
<input type="text" name="volume" id="volume">


<script>

    function berechnen() {
        var breite = document.getElementById('breite').value;
        var laenge = document.getElementById('laenge').value;
        var hoehe = document.getElementById('hoehe').value;

        var resultat = breite * laenge * hoehe;

        document.getElementById('volume').value = resultat;
    }

</script>
</body>
</html>