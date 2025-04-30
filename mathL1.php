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

    <div id="number-forms" class="content-box">
        <h3>Number Forms</h3>
        <p>
            Numbers can be expressed in various forms:
            <ul>
                <li><strong>Standard Form:</strong> The most common way of writing numbers, such as 1, 2, 3.</li>
                <li><strong>Expanded Form:</strong> Writing the number as the sum of its parts, for example, 123 = 100 + 20 + 3.</li>
                <li><strong>Word Form:</strong> Writing the number in words, like "one hundred twenty-three."</li>
            </ul>
        </p>
        <p>
            Understanding these forms helps in various math applications, including addition and subtraction.
        </p>
        <h3>Examples:</h3>
        <ul>
            <li>The number 256 in expanded form is 200 + 50 + 6.</li>
            <li>The number 45 in word form is "forty-five."</li>
        </ul>
    </div>

    <div id="counting" class="content-box">
        <h3>Counting</h3>
        <p>
            Counting is the process of determining the number of items in a group. 
            It starts with the basic numbers 1, 2, 3, and continues infinitely. 
            We will practice counting objects and recognizing number patterns.
        </p>
        <p>
            Counting can be done in various ways, such as counting objects one by one or skip counting (counting by 2s, 5s, etc.).
        </p>
        <h3>Exercise:</h3>
        <p>Count the following objects:</p>
        <ul>
            <li>3 apples, 4 bananas, and 2 oranges.</li>
            <li>Skip count by 5: 5, 10, 15, 20...</li>
        </ul>
    </div>

    <div id="number-lines" class="content-box">
        <h3>Number Lines</h3>
        <p>
            A number line is a straight line that represents numbers in order. 
            It is used to visualize the relationship between numbers, including positive and negative numbers. 
            We will learn how to plot numbers on a number line and understand their positions.
        </p>
        <p>
            Each point on the number line corresponds to a number, making it easier to see the distance between them.
        </p>
        <h3>Example:</h3>
        <p>On a number line, 0 is in the middle, with positive numbers to the right and negative numbers to the left.</p>
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

    <div id="adding-objects" class="content-box">
        <h3>Adding Objects</h3>
        <p>
            To add objects, we can physically count them together. 
            For example, if we have 2 apples and add 3 more, we count them all together to find that there are 5 apples.
        </p>
        <h3>Exercise:</h3>
        <p>
            Count the total number of objects in the following scenario: 
            You have 3 toy cars, and your friend gives you 2 more. 
            How many toy cars do you have in total?
        </p>
    </div>

    <div id="number-sentences" class="content-box">
        <h3>Number Sentences</h3>
        <p>
            A number sentence is a mathematical statement that shows the relationship between numbers using symbols. 
            For example, "2 + 3 = 5" is a number sentence that shows the addition of 2 and 3 to get 5.
        </p>
        <h3>Examples:</h3>
        <ul>
            <li><strong>2 + 3 = 5</strong></li>
            <li><strong>4 + 6 = 10</strong></li>
        </ul>
    </div>

    <div id="word-problems" class="content-box">
        <h3>Word Problems</h3>
        <p>
            Word problems require us to apply our addition skills in real-life scenarios. 
            We read the problem, identify the numbers involved, and formulate a number sentence to find the solution.
        </p>
        <h3>Example:</h3>
        <p>If there are 5 birds on a tree and 3 more birds come, how many birds are there now?</p>
        <p>Solution: 5 + 3 = 8 birds.</p>
    </div>

</div>

</body>
</html>
