
  <!-- front end code for signup -->

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Importing Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Linking to the external CSS file -->
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .signup-container {
            background-color: #ffffff;
            border-radius: 1rem;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 600px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 0.5rem 0;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="password"], select {
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            width: 100%;
        }
        button {
            padding: 0.7rem;
            border: none;
            border-radius: 0.5rem;
            background-color: #6a0dad; /* Purple color */
            color: #ffffff;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #5a0b9d; /* Darker purple on hover */
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h1>Sign Up</h1>
        <form action="register_user.php" method="post">
            <!-- Changed Full Name to Username -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="age">Age:</label>
            <select id="age" name="age" required>
                <option value="" disabled selected>Select your age</option>
                <?php for ($i = 1; $i <= 120; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>

            <label for="academic-background">Academic Background:</label>
            <select id="academic-background" name="academic_background" required>
                <option value="" disabled selected>Select your academic background</option>
                <option value="highschool">High School</option>
                <option value="undergraduate">Undergraduate</option>
                <option value="postgraduate">Postgraduate</option>
                <option value="other">Other</option>
            </select>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm_password" required>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
