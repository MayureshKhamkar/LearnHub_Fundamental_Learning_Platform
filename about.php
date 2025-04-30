<!-- about.php -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Fundamental Learning</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* index.css */
body {
    font-family: 'Comic Sans MS', cursive, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #FDF9F7;
    color: #333;
}

a {
    color: inherit;
    text-decoration: none;
}

button {
    cursor: pointer;
}

/* Navbar Styling */
#navbar {
    border: 1px solid;
    background-color: #fff;
    border-radius: 2rem;
    overflow: hidden;
    padding: 1rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
    position: relative;
}

#navbar .logo a i {
    height: 4rem;
    vertical-align: middle;
    border: none;
    transition: height 0.3s ease;
    font-size: 2rem;
}

#navbar nav {
    display: flex;
    align-items: center;
    padding-left: 1rem;
    margin-left: -1rem;
}

#navbar nav a {
    display: flex;
    align-items: center;
    color: #000;
    text-align: center;
    padding: 0.9rem 1rem;
    text-decoration: none;
    font-size: 1.2rem;
    border-radius: 1.2rem;
    position: relative;
    transition: color 0.3s ease;
    margin-right: 1rem;
}

#navbar nav a:hover {
    color: #6a0dad;
}

#navbar .right {
    display: flex;
    align-items: center;
}

#navbar .right a {
    margin-left: 1.4rem;
}

/* About Page Styling */
#about {
    background-color: #FFF0E5;
    padding: 2rem;
    border-radius: 1.5rem;
    text-align: center;
    margin: 2rem auto;
    max-width: 800px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
}

#about .container {
    margin: 0 auto;
    padding: 1rem;
}

#about h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #6a0dad;
}

#about p {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #333;
}

    </style>
</head>
<body>
    
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
        <a href="language.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'language.php' ? 'active' : ''; ?>">
            <i class="fas fa-language icon"></i> Language Learning
        </a>
        <a href="blogs.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'blogs.php' ? 'active' : ''; ?>">
            <i class="fas fa-pen icon"></i> Blogs
        </a>
        <a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">
            <i class="fas fa-info-circle icon"></i> About
        </a>
    </nav>

    <div class="right">
        <?php if (isset($_SESSION['username'])): ?>
            <a href="profile.php">
                <i class="fas fa-user-circle icon"></i> Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>
            </a>
            <a href="logout.php" class="logout">
                <i class="fas fa-sign-out-alt icon"></i> Logout
            </a>
        <?php else: ?>
            <a href="login.php" class="login-signup">
                <i class="fas fa-sign-in-alt icon"></i> Login
            </a>
        <?php endif; ?>
    </div>
</section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h1>About Fundamental Learning</h1>
            <p>Welcome to Fundamental Learning, where we believe in the power of education to transform lives. Our mission is to provide a wide range of courses and learning materials, making education accessible to everyone, everywhere.</p>
            <p>Our platform offers engaging courses in various fields, language learning resources, and insightful blogs to help you achieve your learning goals. Whether you are a student, a professional, or simply someone who loves to learn, we have something for you.</p>
            <p>Join us on this journey of knowledge and growth. Happy Learning!</p>
        </div>
    </section>
</body>
</html>
