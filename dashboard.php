<?php
require_once 'config.php';
require_once 'AuthMiddleware.php';

$authMiddleware = new AuthMiddleware();
$authMiddleware->handle(); // Check if the user is authenticated

echo "Welcome to the dashboard! <br>";
echo '<a href="logout.php">Logout</a>';
?>

<html>
    <head></head>
    <body>
        <h1>Web Sekolah Tian</h1>
        <a href="guru.php">Data Guru</a>
    </body>
</html>