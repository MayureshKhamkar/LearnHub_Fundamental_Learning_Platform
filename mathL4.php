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
            text-decoration: none; /* No underline for links */
            color: #333; /* Link color */
            font-size: 18px; /* Link font size */
            padding: 10px; /* Padding for better click area */
            border-radius: 5px; /* Rounded edges */
            display: block; /* Make the link fill the entire area */
            transition: background-color 0.3s; /* Smooth transition for hover effect */
        }

        .sidebar a:hover {
            background-color: #f0f0f0; /* Background color on hover */
            color: #6a0dad; /* Change text color on hover */
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
            <li><a href="#basic-addition">Basic Addition</a></li>
            <li><a href="#introduction-to-decimals">Introduction to Decimals</a></li>
            <ul>
                <li><a href="#decimal-forms">Decimal Forms</a></li>
                <li><a href="#decimal-operations">Decimal Operations</a></li>
            </ul>
            <li><a href="#measurement-basics">Measurement Basics</a></li>
            <ul>
                <li><a href="#units-of-measurement">Units of Measurement</a></li>
                <li><a href="#measuring-length">Measuring Length</a></li>
                <li><a href="#measuring-weight">Measuring Weight</a></li>
                <li><a href="#measuring-volume">Measuring Volume</a></li>
            </ul>
        </ul>
        <div class="go-back">
            <a href="mathL.php">Go Back</a>
        </div>
    </div>
</div>

<div class="content-container">
    <div id="intro-to-numbers" class="content-box">
        <h2>Introduction to Numbers</h2>
        <p>
            Numbers are symbols used to represent quantities. They can be whole numbers, fractions, or decimals.
            Understanding numbers is the foundation of mathematics. 
            In this lesson, we will explore different types of numbers and their uses in everyday life.
        </p>
        <p>
            Numbers help us count, measure, and identify things around us. 
            They are used in various situations such as shopping, cooking, and measuring distances.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Numbers can be categorized as natural, whole, integers, rational, or irrational.</li>
            <li>Each type of number has unique properties and applications.</li>
        </ul>
    </div>

    <div id="basic-addition" class="content-box">
        <h2>Basic Addition</h2>
        <p>
            Addition is one of the four basic arithmetic operations. It involves combining two or more quantities to find a total. 
            In this lesson, we will explore various methods of addition, including counting objects and using number sentences.
        </p>
        <p>
            Addition can be done using physical objects, fingers, or mental math. 
            It's essential to understand addition as it lays the groundwork for more complex math skills.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>The symbol for addition is +.</li>
            <li>The result of addition is called the sum.</li>
        </ul>
    </div>

    <div id="introduction-to-decimals" class="content-box">
        <h2>Introduction to Decimals</h2>
        <p>
            Decimals are a way of expressing numbers that are not whole numbers. They represent fractions in a base ten system.
            Understanding decimals is crucial for dealing with money, measurements, and various calculations.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>A decimal is separated by a decimal point, indicating values less than one.</li>
            <li>Decimals can be converted to fractions and vice versa.</li>
        </ul>
    </div>

    <div id="decimal-forms" class="content-box">
        <h3>Decimal Forms</h3>
        <p>
            Decimals can be represented in different ways:
            <ul>
                <li><strong>Standard Decimal:</strong> e.g., 0.5, 1.25.</li>
                <li><strong>Fraction Form:</strong> e.g., 0.5 = 1/2.</li>
                <li><strong>Percentage Form:</strong> e.g., 0.5 = 50%.</li>
            </ul>
        </p>
        <p>
            Understanding these forms helps in various applications such as calculating discounts or measuring items.
        </p>
    </div>

    <div id="decimal-operations" class="content-box">
        <h3>Decimal Operations</h3>
        <p>
            Basic operations with decimals include addition, subtraction, multiplication, and division.
            It's important to align decimal points when adding or subtracting decimals.
        </p>
        <h3>Examples:</h3>
        <ul>
            <li><strong>0.75 + 0.25 = 1.00</strong></li>
            <li><strong>1.5 - 0.5 = 1.0</strong></li>
        </ul>
    </div>

    <div id="measurement-basics" class="content-box">
        <h2>Measurement Basics</h2>
        <p>
            Measurement is the process of determining the size, length, or amount of something. 
            It is essential for various applications, including cooking, construction, and science.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Measurements can be expressed in different units such as meters, liters, and grams.</li>
            <li>Understanding measurement helps in everyday tasks and problem-solving.</li>
        </ul>
    </div>

    <div id="units-of-measurement" class="content-box">
        <h3>Units of Measurement</h3>
        <p>
            Units of measurement are standard quantities used to measure physical properties.
            Common units include:
            <ul>
                <li><strong>Length:</strong> meter (m), centimeter (cm).</li>
                <li><strong>Weight:</strong> kilogram (kg), gram (g).</li>
                <li><strong>Volume:</strong> liter (L), milliliter (mL).</li>
            </ul>
        </p>
    </div>

    <div id="measuring-length" class="content-box">
        <h3>Measuring Length</h3>
        <p>
            Length is a measurement of how long an object is. 
            It can be measured using rulers, measuring tapes, or yardsticks.
        </p>
        <p>
            Different units are used based on the context, such as centimeters for small objects and meters for larger distances.
        </p>
    </div>

    <div id="measuring-weight" class="content-box">
        <h3>Measuring Weight</h3>
        <p>
            Weight measures how heavy an object is. 
            It is commonly measured in kilograms and grams using scales.
        </p>
        <p>
            Understanding weight helps in cooking, shipping, and health-related measurements.
        </p>
    </div>

    <div id="measuring-volume" class="content-box">
        <h3>Measuring Volume</h3>
        <p>
            Volume measures the space an object occupies. 
            It can be measured using liters and milliliters, often in cooking or scientific contexts.
        </p>
        <p>
            Tools like measuring cups or graduated cylinders are used to measure volume accurately.
        </p>
    </div>
</div>

</body>
</html>
