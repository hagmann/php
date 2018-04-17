<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>JavaScript</title>
</head>
<body>

<h1>Rechner</h1>
<input type="number" name="nummer1" id="nummer1">

<script>
    var nummer1 = document.getElementById('nummer1');

//    nummer1.focus();

//    nummer1.setAttribute('disabled', true);



    nummer1.addEventListener('focus', function() {
        console.log('hi');
    });


    nummer1.addEventListener('change', function() {
        console.log('neuer Wert');
    })


    /* Input Events

     blur - When a user leaves an input field
     change - When a user changes the content of an input field
     change - When a user selects a dropdown value
     focus - When an input field gets focus
     select - When input text is selected
     submit - When a user clicks the submit button
     reset - When a user clicks the reset button
     keydown - When a user is pressing/holding down a key
     keypress - When a user is pressing/holding down a key
     keyup - When the user releases a key
     keyup - When the user releases a key
     keydown vs onkeyup - Both
     */

</script>
</body>
</html>