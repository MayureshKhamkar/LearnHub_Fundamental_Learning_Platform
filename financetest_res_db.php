<?php
session_start(); // Start the session to access session variables

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
    error_log("Connection failed: " . $conn->connect_error);
    exit();
}

// Capture the request body as JSON
$data = json_decode(file_get_contents('php://input'), true);

// Validate the received data
if (!isset($data['score']) || !isset($data['total_questions'])) {
    error_log("Invalid data received. Score or total questions missing.");
    echo json_encode(['error' => 'Invalid data received.']);
    exit();
}

// Capture the score and total number of questions from the request
$score = (int)$data['score'];  
$totalQuestions = (int)$data['total_questions'];

// Retrieve the user's name from the session
$user_name = $_SESSION['username'] ?? 'Anonymous'; // Default to 'Anonymous' if not logged in

// Insert the result into the 'financetest_res_db' table
$stmt = $conn->prepare("INSERT INTO financetest_res_db (user_name, score, total_questions, timestamp) VALUES (?, ?, ?, NOW())");

if ($stmt === false) {
    error_log("SQL Prepare failed: " . $conn->error);
    echo json_encode(['error' => 'Database error occurred.']);
    exit();
}

// Bind the parameters and execute the statement
$stmt->bind_param("sii", $user_name, $score, $totalQuestions);

if (!$stmt->execute()) {
    error_log("Error executing query: " . $stmt->error);
    echo json_encode(['error' => 'Error saving score to the database.']);
} else {
    // Log success and respond with success message and user details
    error_log("Score successfully saved for user: " . $user_name);
    echo json_encode(['success' => true, 'user' => $user_name, 'score' => $score, 'total_questions' => $totalQuestions]);
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
