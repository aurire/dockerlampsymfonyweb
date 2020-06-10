<?php
phpinfo();

$host = 'mysql';
$user = 'root';
$pass = 'rootpassword2';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL successfully!";
}

?>
