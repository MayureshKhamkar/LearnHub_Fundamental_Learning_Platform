
  <!-- login process along with data stored , in login for test results -->

<?php
session_start(); // Start the session

// Database connection details
$servername = "localhost";
$port = "3307";
$dbUsername = "root";
$dbPassword = "";
$dbname = "learn_hub";

// Create a connection

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    header("Location: login.php?error=" . urlencode("Connection failed: " . $conn->connect_error));
    exit();
}

// Prepare SQL statement
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    error_log("Prepare failed: " . $conn->error);
    header("Location: login.php?error=" . urlencode("Database error! Please try again later."));
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare an SQL statement to select the user
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    // Verify the password
    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        // Set session variable for username
        $_SESSION['username'] = $username;  // Store the username in session

        // Redirect to index.php after successful login
        header("Location: index.php");
        exit();
    } else {
        // Handle invalid credentials
        echo "Invalid username or password!";
    }

    $stmt->close();
    $conn->close();
}
?>
