<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fundamental Learning</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
        .login-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
            width: 300px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 1.5rem;
            color: #6a0dad;
            font-size: 1.5rem;
        }
        .login-container input[type="text"], 
        .login-container input[type="password"] {
            width: calc(100% - 1.6rem); 
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 0.5rem;
        }
        .login-container button {
            width: 100%;
            padding: 0.8rem;
            background-color: #6a0dad;
            color: #fff;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-container button:hover {
            background-color: #5a099d;
        }
        .login-container .create-account {
            margin-top: 1rem;
        }
        .login-container .create-account p {
            margin: 0;
            font-size: 0.9rem;
            color: #333;
        }
        .login-container .create-account a {
            color: #6a0dad;
            text-decoration: none;
            font-weight: bold;
        }
        .login-container .create-account a:hover {
            text-decoration: underline;
        }
        /* Error message styling */
        .error-message {
            color: red;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <!-- Display error message if login fails -->
        <?php if (isset($_GET['error'])): ?>
            <div class="error-message">Invalid username or password.</div>
        <?php endif; ?>
        
        <form action="login_process.php" method="POST">
            <!-- Updated input field for username -->
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="create-account">
            <p>Don't have an account? <a href="signup.php">Create one</a></p>
        </div>
    </div>

    <script>
        // Toggle password visibility
        const passwordInput = document.getElementById('password');
        passwordInput.addEventListener('focus', function() {
            this.type = 'text';
        });
        passwordInput.addEventListener('blur', function() {
            this.type = 'password';
        });
    </script>
</body>
</html>
