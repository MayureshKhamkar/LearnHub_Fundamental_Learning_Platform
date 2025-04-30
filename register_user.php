<?php
session_start();

// Capture form data
$username = $_POST['username'];
$email = $_POST['email'];
$age = $_POST['age'];
$academic_background = $_POST['academic_background'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validate password confirmation
if ($password !== $confirm_password) {
    die("Passwords do not match.");
}

// Database connection details
$servername = "localhost";  
$port = "3307";             
$dbUsername = "root";       
$dbPassword = "";           
$dbname = "learn_hub";      

// Create MySQL connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare SQL statement to insert user data
$sql = "INSERT INTO users (username, email, age, academic_background, password) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Check if the prepare was successful
if ($stmt === false) {
    die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
}

// Bind the parameters
$stmt->bind_param("ssiss", $username, $email, $age, $academic_background, $hashed_password);

// Execute the statement
if ($stmt->execute()) {
    // Successful registration, redirect to login.php
    header("Location: login.php?success=" . urlencode("Registration successful! Please log in."));
    exit(); // Ensure script termination after redirect
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
