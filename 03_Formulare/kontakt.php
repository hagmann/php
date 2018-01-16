<!doctype html>
<html class="no-js" lang="de">
<head>
    <title>Login</title>
</head>
<body>



<form method="POST">
    <label for="vorname">Vorname</label>
    <input type="text" id="vorname" name="vorname">

    <label for="nachname">Nachname</label>
    <input type="text" id="nachname" name="nachname">

    <label for="betreff">Betreff</label>
    <input type="text" id="betreff" name="betreff">

    <label for="mitteilung">Mitteilung</label>
    <textarea name="mitteilung" id="mitteilung" cols="30" rows="10"></textarea>

    <input type="submit" value="Senden" name="submit">
</form>


<?php

if (isset($_POST['vorname'])) {
    // Formularwerte in Variable $_POST gespeichert
    var_dump($_POST);

    // Formulardaten weiterverwenden
    $to      = 'hello@example.com';
    mail($to, $_POST['betreff'], $_POST['mitteilung']);
}

?>
</body>
</html>
