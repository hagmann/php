<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>JavaScript</title>

</head>
<body>


<script>
    var today = new Date();

    var dd =today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();

    document.write(today + '<br>');


    document.write('Es ist der ' + dd + '.' + mm + '.' + yyyy);

</script>
</body>
</html>