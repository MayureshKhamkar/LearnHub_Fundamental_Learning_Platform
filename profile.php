<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// The username is stored in the session after login
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Fundamental Learning</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
            width: 300px;
            text-align: center;
        }
        .profile-container h2 {
            margin-bottom: 1.5rem;
            color: #6a0dad;
            font-size: 1.8rem;
        }
        .logout-button {
            margin-top: 1.5rem;
            background-color: #6a0dad;
            color: #fff;
            border: none;
            padding: 0.8rem 1.2rem;
            font-size: 1rem;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .logout-button:hover {
            background-color: #5a099d;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>

        <!-- Logout button -->
        <form action="logout.php" method="POST">
            <button class="logout-button" type="submit">Logout</button>
        </form>
    </div>
</body>
</html>

