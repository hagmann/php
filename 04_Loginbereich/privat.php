<?php session_start(); ?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Geschützter Bereich</title>
</head>
<body>
<?php if ($_SESSION['loggedin'] == true): ?>
    <h1>Geschützter Bereich</h1>
    <h2>Hallo <?= $_SESSION['username']; ?></h2>

    <ul>
        <li><a href="logout.php">Logout</a></li>
    </ul>
<?php else: ?>
    <h1>Kein Zugriff!</h1>
<?php endif; ?>
</body>
</html>
