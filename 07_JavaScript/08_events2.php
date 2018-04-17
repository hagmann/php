<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>JavaScript</title>
    <style>
        nav {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            background: black;
            width: 300px;
            transition: all ease-in-out 200ms;
        }

        nav div {
            position: fixed;
            top: 40px;
            left: 40px;
            background-color: red;
            width: 60px;
            height: 60px;
        }
    </style>
</head>
<body onload="toggleNav()">
<nav id="closenav">
    <div class="toggleNav" onclick="toggleNav()"></div>
</nav>




<script>
    var navStatus = true;

    function toggleNav() {
        if(navStatus == true) {
            document.getElementById('closenav').style.left ="-300px";
            navStatus = false;
        } else {
            document.getElementById('closenav').style.left ="0";
            navStatus = true;
        }
    }
</script>
</body>
</html>