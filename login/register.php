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
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$battle_net = $_POST['battle_net'];

$sql_check = "SELECT * FROM Customers WHERE battle_net='$battle_net'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows > 0) {
    header("Location: signup.php?alert=Battle.net already registered!");
    $conn->close();
    exit();
}

$sql_email_check = "SELECT * FROM Customers WHERE email='$email'";
$result_email_check = $conn->query($sql_email_check);

if ($result_email_check->num_rows > 0) {
    header("Location: signup.php?alert=Email already registered!");
    $conn->close();
    exit();
}

$sql_insert = "INSERT INTO Customers (email, first_name, last_name, phone, address, battle_net)
VALUES ('$email', '$first_name', '$last_name', '$phone', '$address', '$battle_net')";

if ($conn->query($sql_insert) === TRUE) {
    header("Location: index.php?alert=Registration successful!");
} else {
    header("Location: signup.php?alert=Error: " . $sql_insert . "<br>" . $conn->error);
    $conn->close();
    exit();
}

$conn->close();
?>
