<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Login</title>
</head>
<body>

<?php if ($_SESSION['loggedin'] == true): ?>
    <p>Du bist bereits eingeloggt.</p>
    <ul>
        <li><a href="logout.php">Logout</a></li>
    </ul>
<?php else: ?>
    <form action="loginscript.php" method="POST">
        <label for="username">Benutzername</label>
        <input type="text" id="username" name="username">

        <label for="password">Kennwort</label>
        <input type="password" id="password" name="password">

        <input type="submit" value="Senden" name="submit">
    </form>
<?php endif; ?>

</body>
</html>
