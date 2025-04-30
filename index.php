<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Hub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- Navigation Bar Section -->
    <section id="navbar">
        <div class="logo">
            <a href="index.php">
            <i class="fa-solid fa-user-graduate"></i>
            </a>
        </div>
        <nav>
            <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                <i class="fas fa-home icon"></i> Home
            </a>
            <a href="courses.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'courses.php' ? 'active' : ''; ?>">
                <i class="fas fa-book icon"></i> Courses
            </a>
            <a href="Llearning.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'language.php' ? 'active' : ''; ?>">
                <i class="fas fa-language icon"></i> Language Learning
            </a>
            <a href="blogs.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'blogs.php' ? 'active' : ''; ?>">
                <i class="fas fa-pen"></i> Blogs
            </a>
            <a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">
                <i class="fas fa-info-circle icon"></i> About
            </a>
        </nav>

        <!-- Display user-specific content if logged in -->
        <div class="right">
            <?php if (isset($_SESSION['username'])): ?>
                <!-- Logged-in user links -->
                <a href="profile.php">
                    <i class="fas fa-user-circle icon"></i> Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>
                </a>
                <a href="logout.php" class="logout">
                    <i class="fas fa-sign-out-alt icon"></i> Logout
                </a>
            <?php else: ?>
                <!-- Login/Signup links -->
                <a href="login.php" class="login-signup">
                    <i class="fas fa-sign-in-alt icon"></i> Login
                </a>
            <?php endif; ?>
        </div>
    </section>

 

    <!-- Your other content goes here -->
    <!-- Carousel Section -->
    <section id="carousel">
        <div class="carousel-container">
            <video autoplay muted loop>
                <source src="banner video/LEN.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <!-- Brief Section -->
    <section id="brief">
        <div class="brief-container">
            <div class="text-box">
                <h2>About Learn Hub</h2>
                <p>Welcome to Learn Hub! We are dedicated to providing high-quality educational resources...</p>
                <button class="view-more" onclick="window.location.href='about.php'">View More</button>
            </div>
            <div class="image-box">
                <a href="demo.php">
                    <img src="image/LH logo.jpeg" alt="Learn Hub Image">
                </a>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <section id="footer">
        <div class="footer-content">
            <!-- About Us -->
            <div class="footer-section">
                <h3>About Us</h3>
                <p>Learn Hub is dedicated to providing high-quality educational resources...</p>
            </div>
            <!-- Quick Links -->
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="language.php">Language Learning</a></li>
                    <li><a href="blogs.php">Blogs</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div>
            <!-- Contact Us -->
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: <a href="mailto:contact@learnhub.com">contact@learnhub.com</a></p>
                <p>Phone: <a href="tel:+1234567890">+123-456-7890</a></p>
            </div>
            <!-- Follow Us -->
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                    <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="#"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
                </div>
            </div>
        </div>
        <div class="footer-logo">
            <a href="index.php">
                <img src="image/LH_logo.jpeg" alt="Learn Hub Logo">
            </a>
        </div>
    </section>
</body>
</html>
