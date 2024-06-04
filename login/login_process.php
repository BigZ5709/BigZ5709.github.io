<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "overwatch";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$battle_net = $_POST['battle_net'];

$sql = "SELECT * FROM Customers WHERE email='$email' AND battle_net='$battle_net'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start(); 
    $_SESSION['email'] = $email; 
    $_SESSION['battle_net'] = $battle_net; 
    header("Location: ../"); 
} else {
    session_start();
    $_SESSION['error'] = "Invalid Login Credentials"; 
    header("Location: index.php"); 
    exit;
}

$conn->close();
?>
