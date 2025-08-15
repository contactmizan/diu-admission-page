<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "diu_admission"; //db-name

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
