<?php
// Parse the INI file
$db = parse_ini_file('config.ini');

// Create connection
$conn = new mysqli($db['host'], $db['username'], $db['password'], $db['database']);
mysqli_report(MYSQLI_REPORT_OFF);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
