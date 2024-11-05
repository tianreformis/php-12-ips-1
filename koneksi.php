<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_tianreformis_xii_ips2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
   
// Check   
if (!$conn) {
    die("Connection gagal: " . mysqli_connect_error());
}
