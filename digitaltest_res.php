<?php
session_start(); // Start the session

// Database connection details
$servername = "localhost";
$port = "3307"; // Change this to your port
$dbUsername = "root"; // Change to your DB username
$dbPassword = ""; // Change to your DB password
$dbname = "learn_hub"; // Change to your DB name

// Create a connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize score and total number of questions
$score = 0;
$totalQuestions = 10;  // Total number of questions for the digital literacy test

// Correct answers array (for scoring)
$correctAnswers = [
    1 => 'Smartphone',
    2 => 'Web Browser',
    3 => 'To send messages electronically',
    4 => 'LinkedIn',
    5 => 'Post someone else\'s content',
    6 => 'P@ssw0rd!',
    7 => 'Fraudulent attempts to obtain sensitive information',
    8 => 'Using a VPN',
    9 => 'To protect against malware',
    10 => 'By checking for HTTPS in the URL'
];

// Retrieve the submitted form data from POST request
$responses = $_POST['questions'] ?? [];

// Calculate the score based on correct answers
foreach ($responses as $questionNumber => $answer) {
    if (isset($correctAnswers[$questionNumber]) && $correctAnswers[$questionNumber] === $answer) {
        $score++;
    }
}

// Get the user's name from the session (default to 'Anonymous' if not logged in)
$user_name = isset($_SESSION['username']) ? $_SESSION['username'] : 'Anonymous';

// Prepare an SQL statement to insert the result into the database
$stmt = $conn->prepare("INSERT INTO digitaltest_res_db (user_name, score, total_questions, timestamp) VALUES (?, ?, ?, NOW())");
$stmt->bind_param("sii", $user_name, $score, $totalQuestions);

// Execute the SQL statement and check if the data was successfully inserted
if ($stmt->execute()) {
    // Send a JSON response back to the client with the score and total questions
    echo json_encode([
        'score' => $score,
        'total_questions' => $totalQuestions
    ]);
} else {
    // If there was an error inserting the data, return an error message
    echo json_encode(['error' => 'Error saving results: ' . $stmt->error]);
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
