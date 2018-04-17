<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>JavaScript</title>

</head>
<body>
<h1>Auswahl Programmiersprache</h1>

<select name="" id="list" onchange="getSelectValue()">
    <option value="js">JavaScript</option>
    <option value="php">PHP</option>
    <option value="c#">C#</option>
    <option value="java">Java</option>
    <option value="node">Node.js</option>
</select>


<h3 id="auswahl"></h3>


<script>


    document.getElementById('list').addEventListener('change', function(e) {
        console.log('neue Auswahl');

        console.log(e.value);
    });


    function getSelectValue() {
        var auswahl = document.getElementById('list').value;

        document.getElementById('auswahl').innerHTML = auswahl;
    }
</script>
</body>
</html>