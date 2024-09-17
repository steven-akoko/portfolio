<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'error' => 'Connection failed: ' . $conn->connect_error]);
    exit();
}

// Get the JSON input
$data = json_decode(file_get_contents('php://input'), true);

// Check if data is received
if (!$data) {
    echo json_encode(['success' => false, 'error' => 'No data received']);
    exit();
}

// Sanitize and validate input
$name = $conn->real_escape_string($data['name']);
$email = $conn->real_escape_string($data['email']);
$phone = $conn->real_escape_string($data['phone']);
$message = $conn->real_escape_string($data['message']);

// Prepare and execute SQL statement
$sql = "INSERT INTO recommendation (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true, 'message' => 'Recommendation submitted successfully']);
} else {
    echo json_encode(['success' => false, 'error' => 'Error: ' . $conn->error]);
}

// Close connection
$conn->close();
?>
