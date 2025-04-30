
  <!-- Blogs front end code -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs - Learn Hub</title>
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
        .blogs-container {
            padding: 2rem;
            max-width: 1200px;
            margin: auto;
        }
        .blog-item {
            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border: 2px solid #6a0dad;
            border-left: 10px solid #6a0dad;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }
        .blog-item:hover {
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
            transform: scale(1.02);
        }
        .blog-title {
            font-size: 2rem;
            color: #6a0dad;
            margin: 0;
            margin-bottom: 0.5rem;
        }
        .blog-description {
            font-size: 1.2rem;
            margin: 0;
            margin-bottom: 1rem;
            color: #555;
        }
        .full-content {
            display: none;
            font-size: 1.1rem;
            color: #666;
            margin-top: 1rem;
        }
        .view-details {
            background-color: #6a0dad;
            color: #fff;
            padding: 0.6rem 1.2rem;
            border: none;
            border-radius: 0.3rem;
            font-size: 1rem;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .view-details:hover {
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
            <a href="Llearning.php"><i class="fas fa-language"></i>Language Learning</a>
            <a href="blogs.php"><i class="fas fa-pen"></i>Blogs</a>
            <!-- <a href="standard.php"><i class="fas fa-school"></i>Standard</a> -->
            <a href="about.php"><i class="fas fa-info-circle"></i>About</a>
        </nav>
        <div class="right">
            <a href="profile.php"><i class="fas fa-user-circle"></i></a>
        </div>
    </div>

    <div class="blogs-container">
        <h2>Blogs</h2>
        <!-- Blog items -->
        <div class="blog-item">
            <h3 class="blog-title">Understanding Basic Arithmetic</h3>
            <p class="blog-description">A brief introduction to basic arithmetic concepts including addition, subtraction, multiplication, and division.</p>
            <div class="full-content">
                <p>Arithmetic is one of the most fundamental aspects of mathematics. It includes the basic operations such as addition, subtraction, multiplication, and division. Understanding these concepts is crucial for further mathematical learning and real-life applications.</p>
                <p>This blog covers various methods to approach arithmetic problems, tips for solving them efficiently, and practical examples to reinforce learning.</p>
            </div>
            <button class="view-details" onclick="toggleContent(this)">View Details</button>
        </div>
        <div class="blog-item">
            <h3 class="blog-title">Exploring Geometry Basics</h3>
            <p class="blog-description">An overview of basic geometric shapes, properties, and their applications in everyday life.</p>
            <div class="full-content">
                <p>Geometry is a branch of mathematics that deals with shapes, sizes, and the properties of space. This blog introduces fundamental geometric shapes such as circles, triangles, and rectangles, and explores their properties and uses.</p>
                <p>Learn how geometry is applied in various fields and how understanding basic shapes can enhance spatial reasoning skills.</p>
            </div>
            <button class="view-details" onclick="toggleContent(this)">View Details</button>
        </div>
        <div class="blog-item">
            <h3 class="blog-title">Mastering Fractions</h3>
            <p class="blog-description">Learn the basics of fractions, including how to add, subtract, multiply, and divide them.</p>
            <div class="full-content">
                <p>Fractions are a fundamental concept in mathematics, representing parts of a whole. This blog provides a detailed look at fractions, covering operations such as addition, subtraction, multiplication, and division.</p>
                <p>Through examples and explanations, you'll gain a solid understanding of how to work with fractions in various mathematical problems.</p>
            </div>
            <button class="view-details" onclick="toggleContent(this)">View Details</button>
        </div>
        <div class="blog-item">
            <h3 class="blog-title">Introduction to Algebra</h3>
            <p class="blog-description">A beginner's guide to algebra, focusing on solving equations and understanding variables.</p>
            <div class="full-content">
                <p>Algebra is an area of mathematics that uses symbols and letters to represent numbers and quantities in formulas and equations. This blog introduces basic algebraic concepts, including variables, equations, and expressions.</p>
                <p>Explore how to solve simple equations and understand the fundamental principles of algebra to prepare for more advanced topics.</p>
            </div>
            <button class="view-details" onclick="toggleContent(this)">View Details</button>
        </div>
        <div class="blog-item">
            <h3 class="blog-title">Exploring Probability</h3>
            <p class="blog-description">Understand the basics of probability and how it applies to everyday events and decisions.</p>
            <div class="full-content">
                <p>Probability is the study of randomness and uncertainty, helping us understand the likelihood of various outcomes. This blog covers basic probability concepts, including how to calculate probabilities and apply them to real-life situations.</p>
                <p>Learn how probability theory can be used to make informed decisions and analyze different scenarios.</p>
            </div>
            <button class="view-details" onclick="toggleContent(this)">View Details</button>
        </div>
        <div class="blog-item">
            <h3 class="blog-title">Decoding Percentages</h3>
            <p class="blog-description">A comprehensive look at percentages, including how to calculate and use them in various contexts.</p>
            <div class="full-content">
                <p>Percentages are a common way to express numbers as fractions of 100, making them useful in many everyday situations. This blog explores how to calculate percentages, convert between fractions and percentages, and apply these concepts in real-world scenarios.</p>
                <p>Gain practical skills in working with percentages, such as discounts, statistics, and financial calculations.</p>
            </div>
            <button class="view-details" onclick="toggleContent(this)">View Details</button>
        </div>
    </div>

    <script>
        function toggleContent(button) {
            const fullContent = button.previousElementSibling;
            if (fullContent.style.display === 'block') {
                fullContent.style.display = 'none';
                button.innerText = 'View Details';
            } else {
                fullContent.style.display = 'block';
                button.innerText = 'Hide Details';
            }
        }
    </script>
</body>
</html>
