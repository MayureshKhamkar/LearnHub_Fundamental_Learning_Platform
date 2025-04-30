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
            background-color: #4CAF50; /* Change this to your desired color */
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px; /* Rounded edges */
            cursor: pointer;
            margin-top: 20px; /* Space above the button */
        }

        button:hover {
            background-color: #45a049; /* Darker shade for hover effect */
        }
        .sidebar-container {
            width: 300px; /* Set the width of the sidebar */
            background-color: white; /* Background color for the sidebar */
            border-right: 2px solid #d3d3d3; /* Right border for separation */
            height: 100vh; /* Full height of the viewport */
            position: fixed; /* Fixed positioning */
            overflow-y: auto; /* Scrollable if content overflows */
        }
        .sidebar {
            padding: 20px; /* Padding inside the sidebar */
        }
        .sidebar h2 {
            font-size: 24px; /* Title font size */
            color: #6a0dad; /* Title color */
        }
        .sidebar ul {
            list-style-type: none; /* No bullets for list items */
            padding: 0; /* No padding for list */
        }
        .sidebar ul li {
            margin: 15px 0; /* Space between list items */
        }
        .sidebar a {
            text-decoration: none; /* Remove underline for links */
            color: #333; /* Link color */
            font-size: 18px; /* Link font size */
        }
        .sidebar a:hover {
            color: #6a0dad; /* Change link color on hover */
            text-decoration: none; /* Ensure no underline on hover */
        }
        .content-container {
            margin-left: 320px; /* Leave space for the sidebar */
            padding: 20px; /* Padding around the content */
        }
        .content-box {
            background-color: #ffffff; /* White background for content boxes */
            border: 2px solid #6a0dad; /* Improved border color */
            border-radius: 15px; /* Oval edges */
            margin-bottom: 20px; /* Space between content boxes */
            padding: 20px; /* Padding inside content boxes */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Deeper shadow for depth */
        }
        .content-box h2, .content-box h3 {
            color: #6a0dad; /* Heading color */
        }
        .go-back {
            margin-top: 20px; /* Space above button */
            text-align: center; /* Center the button */
        }
        .go-back button {
            padding: 10px 15px;
            font-size: 1rem;
            color: white;
            background-color: #6a0dad; /* Button color */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .go-back button:hover {
            background-color: #5a0a9d; /* Darker shade on hover */
        }
    </style>
</head>
<body>

<div class="sidebar-container">
    <div class="sidebar">
        <h2>Lessons</h2>
        <ul>
            <li><a href="#intro-to-numbers">Introduction to Numbers</a></li>
            <ul>
                <li><a href="#number-forms">Number Forms</a></li>
                <li><a href="#counting">Counting</a></li>
                <li><a href="#number-lines">Number Lines</a></li>
            </ul>
            <li><a href="#basic-addition">Basic Addition</a></li>
            <ul>
                <li><a href="#adding-objects">Adding Objects</a></li>
                <li><a href="#number-sentences">Number Sentences</a></li>
                <li><a href="#word-problems">Word Problems</a></li>
            </ul>
            <li><a href="#basic-subtraction">Basic Subtraction</a></li>
            <ul>
                <li><a href="#subtracting-objects">Subtracting Objects</a></li>
                <li><a href="#subtraction-sentences">Subtraction Sentences</a></li>
            </ul>
            <li><a href="#simple-multiplication">Simple Multiplication</a></li>
            <ul>
                <li><a href="#multiplying-objects">Multiplying Objects</a></li>
                <li><a href="#multiplication-sentences">Multiplication Sentences</a></li>
            </ul>
        </ul>
        <div class="go-back">
            <a href="mathL.php">Go Back</a>
        </div>
    </div>
</div>

<div class="content-container">
    <div id="basic-subtraction" class="content-box">
        <h2>Basic Subtraction</h2>
        <p>
            Subtraction is one of the four basic arithmetic operations. It involves taking away a quantity from another quantity to find the difference.
            In this lesson, we will explore the concept of subtraction using real-life examples.
        </p>
        <p>
            Subtraction helps us understand how to reduce quantities and compare amounts.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Subtraction can be thought of as the opposite of addition.</li>
            <li>It can be performed with objects, numbers, or mentally.</li>
        </ul>
       
    </div>

    <div id="subtracting-objects" class="content-box">
        <h3>Subtracting Objects</h3>
        <p>
            To subtract objects, we physically take away some items from a group. 
            For example, if you have 5 apples and take away 2, you will have a total of 3 apples left. 
            This practical approach helps in understanding the concept of subtraction.
        </p>
        <h3>Exercise:</h3>
        <p>Try subtracting the following:</p>
        <ul>
            <li>5 toy cars - 2 toy cars = ?</li>
            <li>8 oranges - 3 oranges = ?</li>
        </ul>
    </div>

    <div id="subtraction-sentences" class="content-box">
        <h3>Subtraction Sentences</h3>
        <p>
            A subtraction sentence is a mathematical statement that uses numbers and the subtraction operation (like -). 
            For example, the sentence "5 - 2 = 3" shows the result of subtracting 2 from 5.
        </p>
        <p>
            Subtraction sentences can also involve larger numbers, like "10 - 4 = 6."
        </p>
    </div>

    <div id="simple-multiplication" class="content-box">
        <h2>Simple Multiplication</h2>
        <p>
            Multiplication is another basic arithmetic operation. It involves combining equal groups to find a total. 
            In this lesson, we will explore simple multiplication and its applications.
        </p>
        <p>
            Understanding multiplication helps in various math applications, including addition and division.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Multiplication can be thought of as repeated addition.</li>
            <li>It can be done using objects, numbers, or mental math.</li>
        </ul>
       
    </div>

    <div id="multiplying-objects" class="content-box">
        <h3>Multiplying Objects</h3>
        <p>
            To multiply objects, we group them into equal sets. 
            For example, if we have 3 bags of apples with 4 apples in each bag, we can find the total number of apples by multiplying: 3 × 4 = 12.
        </p>
        <h3>Exercise:</h3>
        <p>Try multiplying the following:</p>
        <ul>
            <li>2 bags of 5 candies = ?</li>
            <li>4 groups of 3 toys = ?</li>
        </ul>
    </div>

    <div id="multiplication-sentences" class="content-box">
        <h3>Multiplication Sentences</h3>
        <p>
            A multiplication sentence is a mathematical statement that uses numbers and the multiplication operation (like ×). 
            For example, the sentence "3 × 4 = 12" shows the result of multiplying 3 groups of 4.
        </p>
        <p>
            Multiplication sentences can also involve larger numbers, like "6 × 7 = 42."
        </p>
    </div>
</div>

</body>
</html>
