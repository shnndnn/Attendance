<?php 
$host = 'localhost'; // Database host
$username = 'root'; // Database username
$password = ''; // Database password
$db_name = 'test'; // Database name

$conn = new mysqli($host, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo "Connected successfully";
}
?>