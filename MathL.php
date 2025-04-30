<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Courses - Learn Hub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
         body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
        }
        #navbar {
            border: 2px solid;
            border-radius: 5rem;
            background-color: #fff;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        #navbar .logo img {
            height: 2.5rem;
            vertical-align: middle;
        }
        #navbar nav {
            display: flex;
            align-items: center;
        }
        #navbar nav a {
            display: flex;
            align-items: center;
            color: #333;
            text-align: center;
            padding: 0.7rem 1rem;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 0.3rem;
            transition: color 0.3s ease;
            margin: 0 0.5rem;
        }
        #navbar nav a i {
            margin-right: 0.5rem;
        }
        /* Updated hover effect */
        #navbar nav a:hover {
            color: #6a0dad;  /* Change text color only */
            /* background-color: transparent; */  /* Ensure no background color change */
        }
        #navbar .right {
            display: flex;
            align-items: center;
        }
        #navbar .right a {
            margin-left: 1rem;
            color: #333;
            text-decoration: none;
            font-size: 2.5rem;
            transition: color 0.3s ease;
        }
        #navbar .right a:hover {
            color: #5a099d;
        }
        .courses-container {
            padding: 2rem;
            display: flex;
            flex-direction: column;
        }
        .course-item {
            border: 2px solid;
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
            padding: 1.6rem;
            margin-bottom: 1.6rem;
            transition: box-shadow 0.3s ease;
        }
        .course-item:hover {
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }
        .course-info {
            flex: 1;
        }
        .course-title {
            font-size: 1.6rem;
            color: #6a0dad;
            margin: 0.5rem;
        }
        .course-description {
            font-size: 1.4rem;
            margin: 0.9rem 0;
        }
        .enroll-button {
            background-color: #6a0dad;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .enroll-button:hover {
            background-color: #5a099d;
        }
        .go-back-button {
            background-color: #6a0dad;
            color: #fff;
            padding: 0.5rem 1rem;
            border: 1px solid #6a0dad;
            border-radius: 0.5rem;
            font-size: 1rem;
            cursor: pointer;
            text-align: center;
            margin-top: 2rem;
            transition: color 0.3s ease, background-color 0.3s ease;
        }
        .go-back-button:hover {
            background-color: #6a0dad;
            color: #fff;
        }
        .test-container {
            border: 1px solid;
            background: linear-gradient(135deg, #e0f7fa, #e1bee7);
            border-radius: 0.9rem;
            padding: 2rem;
            margin: 2rem 0;
            text-align: center;
            font-size: 1.2rem;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }
        .test-title {
            font-size: 1.8rem;
            color: #6a0dad;
            margin-bottom: 0.5rem;
        }
        .test-description {
            color: #333;
            margin-bottom: 1rem;
        }
        .test-button {
            background-color: #6a0dad;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .test-button:hover {
            background-color: #5a099d;
        }
    </style>
</head>
<body>
<div id="navbar">
        <div class="logo">
            <h3><i>Learn Hub</i></h3>
        </div>
        <nav>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
            <a href="courses.php"><i class="fas fa-book"></i>Courses</a>
            <a href="language.php"><i class="fas fa-language"></i>Language Learning</a>
            <a href="blogs.php"><i class="fas fa-pen"></i>Blogs</a>
            <!-- <a href="standard.php"><i class="fas fa-school"></i>Standard</a> -->
            <a href="about.php"><i class="fas fa-info-circle"></i>About</a>
        </nav>
        <div class="right">
            <a href="login.php"><i class="fas fa-user-circle"></i></a>
        </div>
    </div>


    <div class="courses-container">
        <h2>Available Lessons</h2>

        <!-- Lesson 1: Introduction to Numbers & Basic Addition -->
        <div class="course-item">
            <div class="course-info">
                <h3 class="course-title">1. Introduction to Numbers & Basic Addition</h3>
                <p class="course-description">A fun and engaging course to understand basic numbers and counting, followed by the fundamentals of addition with simple exercises.</p>
            </div>
            <a href="mathL1.php">
              <button class="enroll-button">View Lesson</button>
            </a>
        </div>

        <!-- Lesson 2: Basic Subtraction & Simple Multiplication -->
        <div class="course-item">
            <div class="course-info">
                <h3 class="course-title">2. Basic Subtraction & Simple Multiplication</h3>
                <p class="course-description">Discover subtraction with engaging activities and problems, then learn multiplication with easy-to-understand explanations and exercises.</p>
            </div>
            <a href="mathL2.php">
              <button class="enroll-button">View Lesson</button>
            </a>
        </div>

        <!-- Lesson 3: Basic Division & Understanding Fractions -->
        <div class="course-item">
            <div class="course-info">
                <h3 class="course-title">3. Basic Division & Understanding Fractions</h3>
                <p class="course-description">Learn the basics of division through lessons, and explore fractions with easy-to-follow examples </p>
            </div>
            <a href="mathL3.php">
              <button class="enroll-button">View Lesson</button>
            </a>
        </div>

      

        <!-- Lesson 4: Introduction to Decimals & Measurement Basics -->
        <div class="course-item">
            <div class="course-info">
                <h3 class="course-title">4. Introduction to Decimals & Measurement Basics</h3>
                <p class="course-description">An introductory lesson on decimals along with learning different units of measurement, including length, weight, and volume.</p>
            </div>
            <a href="mathL4.php">
              <button class="enroll-button">View Lesson</button>
            </a>
        </div>

           <!-- Test  Container -->
        <div class="test-container">
            <h3 class="test-title">Fundamental Mathematics Test </h3>
            <p class="test-description">After completing the first three lessons, take this test to assess your understanding of basic arithmetic concepts.</p>
            <a href="mathtest1.php">
                <button class="test-button">Attempt Test </button>
            </a>
        </div>

     

        <!-- Go Back Button -->
        <a href="courses.php">
            <button class="go-back-button">Go Back</button>
        </a>
    </div>
</body>
</html>
