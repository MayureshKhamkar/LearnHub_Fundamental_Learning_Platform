<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Comic Neue', cursive;
            margin: 0;
            display: flex;
        }

        button {
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 20px; 
        }

        .sidebar-container {
            width: 300px; 
            background-color: white; 
            border-right: 2px solid #d3d3d3; 
            height: 100vh; 
            position: fixed; 
            overflow-y: auto; 
        }

        .sidebar {
            padding: 20px; 
        }

        .sidebar h2 {
            font-size: 24px; 
            color: #6a0dad; 
        }

        .sidebar ul {
            list-style-type: none; 
            padding: 0; 
        }

        .sidebar ul li {
            margin: 15px 0; 
        }

        .sidebar a {
            text-decoration: none; 
            color: #333; 
            font-size: 18px; 
            padding: 10px; 
            border-radius: 5px; 
            display: block; 
            transition: background-color 0.3s; 
        }

        .sidebar a:hover {
            background-color: #f0f0f0; 
            color: #6a0dad; 
        }

        .content-container {
            margin-left: 320px; 
            padding: 20px; 
        }

        .content-box {
            background-color: #ffffff; 
            border: 2px solid #6a0dad; 
            border-radius: 15px; 
            margin-bottom: 20px; 
            padding: 20px; 
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
        }

        .content-box h2, .content-box h3 {
            color: #6a0dad; 
        }

        .go-back {
            margin-top: 20px; 
            text-align: center; 
        }

        .go-back a {
            padding: 10px 15px;
            font-size: 1rem;
            color: #6a0dad; /* Text color */
            background-color: transparent; /* Transparent background */
            border: none; /* No border */
            border-radius: 5px;
            cursor: pointer;
            transition: color 0.3s ease; /* Smooth transition for text color */
            text-decoration: none; 
        }

        .go-back a:hover {
            color: #5a0a9d; /* Change text color on hover */
        }

    </style>
</head>
<body>

<div class="sidebar-container">
    <div class="sidebar">
        <h2>Lessons</h2>
        <ul>
            <li><a href="#geometry-fundamentals">Geometry Fundamentals</a></li>
            <ul>
                <li><a href="#basic-shapes">Basic Shapes</a></li>
                <li><a href="#perimeter-area">Perimeter and Area</a></li>
                <li><a href="#angles">Angles</a></li>
            </ul>
            <li><a href="#introduction-to-patterns">Introduction to Patterns</a></li>
            <ul>
                <li><a href="#recognizing-patterns">Recognizing Patterns</a></li>
                <li><a href="#creating-patterns">Creating Patterns</a></li>
                <li><a href="#pattern-extensions">Pattern Extensions</a></li>
            </ul>
        </ul>
        <div class="go-back">
            <a href="mathL.php">Go Back</a>
        </div>
    </div>
</div>

<div class="content-container">
    <div id="geometry-fundamentals" class="content-box">
        <h2>Geometry Fundamentals</h2>
        <p>
            Geometry is a branch of mathematics that studies the properties and relationships of points, lines, surfaces, and solids. 
            It helps us understand the shapes and structures around us, which are essential in everyday life.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Geometry involves various concepts such as shapes, sizes, relative positions, and properties of space.</li>
            <li>It has applications in fields like architecture, engineering, and art.</li>
        </ul>
    </div>

    <div id="basic-shapes" class="content-box">
        <h3>Basic Shapes</h3>
        <p>
            Basic shapes are the building blocks of geometry. They include:
            <ul>
                <li><strong>Circle:</strong> A round shape with no corners.</li>
                <li><strong>Square:</strong> A shape with four equal sides and four right angles.</li>
                <li><strong>Triangle:</strong> A shape with three sides and three angles.</li>
                <li><strong>Rectangle:</strong> A shape with four sides and opposite sides equal.</li>
            </ul>
        </p>
        <p>
            Understanding these shapes helps in identifying and categorizing more complex geometric figures.
        </p>
    </div>

    <div id="perimeter-area" class="content-box">
        <h3>Perimeter and Area</h3>
        <p>
            The perimeter is the total distance around a shape, while the area measures the space within a shape.
            Key formulas include:
            <ul>
                <li><strong>Rectangle:</strong> Perimeter = 2(length + width), Area = length × width.</li>
                <li><strong>Square:</strong> Perimeter = 4 × side, Area = side × side.</li>
                <li><strong>Triangle:</strong> Area = 1/2 × base × height.</li>
            </ul>
        </p>
    </div>

    <div id="angles" class="content-box">
        <h3>Angles</h3>
        <p>
            An angle is formed by two rays with a common endpoint, known as the vertex. Angles are measured in degrees.
            Types of angles include:
            <ul>
                <li><strong>Acute:</strong> Less than 90 degrees.</li>
                <li><strong>Right:</strong> Exactly 90 degrees.</li>
                <li><strong>Obtuse:</strong> Greater than 90 but less than 180 degrees.</li>
                <li><strong>Straight:</strong> Exactly 180 degrees.</li>
            </ul>
        </p>
    </div>

    <div id="introduction-to-patterns" class="content-box">
        <h2>Introduction to Patterns</h2>
        <p>
            Patterns are sequences or designs that repeat in a predictable manner. They are found in nature, art, and mathematics.
            Recognizing and creating patterns is a fundamental skill in mathematics.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Patterns can be made up of numbers, shapes, colors, or sounds.</li>
            <li>Identifying patterns helps in problem-solving and predicting outcomes.</li>
        </ul>
    </div>

    <div id="recognizing-patterns" class="content-box">
        <h3>Recognizing Patterns</h3>
        <p>
            Recognizing patterns involves identifying the repeating elements in a sequence. 
            Examples include:
            <ul>
                <li>Number sequences: 1, 2, 3, 4, ... (increasing by 1).</li>
                <li>Shape sequences: Circle, Square, Circle, Square, ... (alternating shapes).</li>
            </ul>
        </p>
        <p>
            This skill is essential for developing logical reasoning and critical thinking.
        </p>
    </div>

    <div id="creating-patterns" class="content-box">
        <h3>Creating Patterns</h3>
        <p>
            Creating patterns involves forming sequences based on specific rules. 
            For example:
            <ul>
                <li>Color patterns: Red, Blue, Red, Blue, ... (alternating colors).</li>
                <li>Shape patterns: Triangle, Triangle, Square, Triangle, Triangle, Square, ... (specific repetitions).</li>
            </ul>
        </p>
        <p>
            Engaging in pattern creation enhances creativity and mathematical understanding.
        </p>
    </div>

    <div id="pattern-extensions" class="content-box">
        <h3>Pattern Extensions</h3>
        <p>
            Pattern extensions involve predicting the next elements in a pattern based on the established rules. 
            For instance, in the sequence 2, 4, 6, ..., the next number would be 8.
        </p>
        <p>
            This activity helps reinforce pattern recognition and logical reasoning skills.
        </p>
    </div>
</div>

</body>
</html>
