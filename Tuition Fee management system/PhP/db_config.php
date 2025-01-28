<?php
$host = 'localhost';
$db = 'tuition_management';
$user = 'root'; // Default for XAMPP/WAMP
$pass = '';     // Default password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
