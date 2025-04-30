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
            border: 1px solid;
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 0.8rem;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
            padding: 1rem;
            margin-bottom: 0.8rem;
            transition: box-shadow 0.3s ease;
        }
        .course-item:hover {
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }
        .course-item img {
            width: 80px;
            height: 80px;
            border-radius: 0.5rem;
            object-fit: cover;
            margin-right: 1rem;
        }
        .course-info {
            flex: 1;
        }
        .course-title {
            font-size: 1.7rem;
            color: #6a0dad;
            margin: 0;
        }
        .course-description {
            font-size: 1.5rem;
            margin: 0.7rem 0;
        }
        .enroll-button {
            border:1px solid;
    background-color: #6a0dad; /* Main button color */
    color: #fff; /* Text color */
    padding: 0.8rem 1.2rem; /* Increased padding */
    border: none; /* No border */
    border-radius: 0.5rem; /* Rounded corners */
    font-size: 1.1rem; /* Slightly larger font size */
    cursor: pointer; /* Pointer cursor on hover */
    text-align: center; /* Center the text */
    transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease; /* Added transitions */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
    text-decoration: none; /* Remove underline */
}

.enroll-button:hover {
    background-color: #5a099d; /* Darker color on hover */
    transform: translateY(-2px); /* Slight lift effect */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Stronger shadow on hover */
}

.enroll-button:active {
    transform: translateY(0); /* Reset lift effect when active */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Reduced shadow when pressed */
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
            <a href="courses.php"><i class="fas fa-book-open"></i>Courses</a>
            <a href="Llearning.php"><i class="fas fa-language"></i>Language Learning</a>
            <a href="blogs.php"><i class="fas fa-pen"></i>Blogs</a>
            <!-- <a href="standard.php"><i class="fas fa-graduation-cap"></i>Standard</a> -->
            <a href="about.php"><i class="fas fa-info-circle"></i>About</a>
        </nav>
        <div class="right">
        <a href="profile.php"><i class="fas fa-user-circle"></i></a>        
        </div>
    </div>

    <div class="courses-container">
        <h2>Courses</h2>
        <!-- Example course items -->
        <div class="course-item">
            <img src="image/course1.jpg" height="500" width="500" alt="Course Image">
            <div class="course-info">
                <h3 class="course-title">Fundamentals of Mathematics</h3>
                <p class="course-description">A fun and engaging course to help young learners understand basic Mathematics. Perfect for early learners and children new to mathematics.</p>
            </div>
            <a href="MathL.php" class="enroll-button">View Course</a>
        </div>      
    </div>

    <div class="courses-container">
       
        <!-- Example course items -->
        <div class="course-item">
            <img src="image/course2.jpg" height="450" width="450" alt="Course Image">
            <div class="course-info">
                <h3 class="course-title">Financial Literacy</h3>
                <p class="course-description">This course covers both theoretical knowledge of the Indian banking system and practical financial skills</p>
            </div>
            <a href="FinanceL.php" class="enroll-button">View Course</a>
        </div>      
    </div>

    <div class="courses-container">
       
       <!-- Example course items -->
       <div class="course-item">
           <img src="image/course2.jpg" height="450" width="450" alt="Course Image">
           <div class="course-info">
               <h3 class="course-title">Digital Literacy</h3>
               <p class="course-description">This course covers topics which will educate learner about recent enhancements in technologies. </p>
           </div>
           <a href="DigitalL.php" class="enroll-button">View Course</a>
       </div>      
   </div>



</body>
</html>


