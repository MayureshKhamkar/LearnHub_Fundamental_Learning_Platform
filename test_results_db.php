<?php
session_start(); // Start the session to access session variables

// Database connection details (assuming this is the same database where users and test results are stored)
$servername = "localhost";
$port = "3307";
$dbUsername = "root";
$dbPassword = "";
$dbname = "learn_hub";

// Create MySQL connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    exit();
}

// Capture score from the request body
$data = json_decode(file_get_contents('php://input'), true);
$score = $data['score'] ?? 0;
$userId = $_SESSION['user_id'] ?? null; // Assuming you're storing user ID in session

// Prepare and execute SQL statement to insert score into the same database
if ($userId !== null) {
    $stmt = $conn->prepare("INSERT INTO test_results_db (user_id, score) VALUES (?, ?)");
    if ($stmt === false) {
        error_log("Prepare failed: " . $conn->error);
        exit();
    }

    $stmt->bind_param("ii", $userId, $score);

    if (!$stmt->execute()) {
        error_log("Error saving score: " . $stmt->error);
    } else {
        error_log("Score successfully saved for user ID: " . $userId);
    }

    // Close the prepared statement
    $stmt->close();
} else {
    error_log("User not logged in. Cannot save score.");
}

// Close the database connection
$conn->close();
?>
