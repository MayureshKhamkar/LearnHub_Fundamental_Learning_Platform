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
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #45a049;
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
        }
        .sidebar a:hover {
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
        .go-back button {
            padding: 10px 15px;
            font-size: 1rem;
            color: white;
            background-color: #6a0dad;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .go-back button:hover {
            background-color: #5a0a9d;
        }
    </style>
</head>
<body>

<div class="sidebar-container">
    <div class="sidebar">
        <h2>Topics</h2>
        <ul>
            <li><a href="#intro-to-numbers">Introduction to Numbers</a>
                <ul>
                    <li><a href="#number-forms">Number Forms</a></li>
                    <li><a href="#counting">Counting</a></li>
                    <li><a href="#number-lines">Number Lines</a></li>
                </ul>
            </li>
            <li><a href="#basic-addition">Basic Addition</a>
                <ul>
                    <li><a href="#adding-objects">Adding Objects</a></li>
                    <li><a href="#number-sentences">Number Sentences</a></li>
                    <li><a href="#word-problems">Word Problems</a></li>
                </ul>
            </li>
            <li><a href="#basic-subtraction">Basic Subtraction</a>
                <ul>
                    <li><a href="#subtracting-objects">Subtracting Objects</a></li>
                    <li><a href="#subtraction-sentences">Subtraction Sentences</a></li>
                </ul>
            </li>
            <li><a href="#simple-multiplication">Simple Multiplication</a>
                <ul>
                    <li><a href="#multiplying-objects">Multiplying Objects</a></li>
                    <li><a href="#multiplication-sentences">Multiplication Sentences</a></li>
                </ul>
            </li>
            <li><a href="#basic-division">Basic Division</a>
                <ul>
                    <li><a href="#dividing-objects">Dividing Objects</a></li>
                    <li><a href="#division-sentences">Division Sentences</a></li>
                </ul>
            </li>
            <li><a href="#understanding-fractions">Understanding Fractions</a>
                <ul>
                    <li><a href="#what-are-fractions">What Are Fractions?</a></li>
                    <li><a href="#fraction-examples">Fraction Examples</a></li>
                </ul>
            </li>
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
            <li>4 bags of cookies with 3 cookies in each bag = ?</li>
            <li>5 boxes of crayons with 2 crayons in each box = ?</li>
        </ul>
    </div>

    <div id="multiplication-sentences" class="content-box">
        <h3>Multiplication Sentences</h3>
        <p>
            A multiplication sentence is a mathematical statement that uses numbers and the multiplication operation (like ×). 
            For example, the sentence "3 × 4 = 12" shows the result of multiplying 3 by 4.
        </p>
        <p>
            Multiplication sentences can also involve larger numbers, like "6 × 7 = 42."
        </p>
    </div>

    <div id="basic-division" class="content-box">
        <h2>Basic Division</h2>
        <p>
            Division is the process of splitting a quantity into equal parts. 
            In this lesson, we will explore the concept of division and how it relates to multiplication.
        </p>
        <p>
            Understanding division helps us solve problems involving sharing and grouping.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Division can be thought of as the opposite of multiplication.</li>
            <li>It can be performed with objects, numbers, or mentally.</li>
        </ul>
    </div>

    <div id="dividing-objects" class="content-box">
        <h3>Dividing Objects</h3>
        <p>
            To divide objects, we separate them into equal groups. 
            For example, if you have 12 candies and want to share them with 3 friends, you can divide them: 12 ÷ 3 = 4. 
            Each friend gets 4 candies.
        </p>
        <h3>Exercise:</h3>
        <p>Try dividing the following:</p>
        <ul>
            <li>20 toy cars among 4 children = ?</li>
            <li>15 cupcakes among 5 friends = ?</li>
        </ul>
    </div>

    <div id="division-sentences" class="content-box">
        <h3>Division Sentences</h3>
        <p>
            A division sentence is a mathematical statement that uses numbers and the division operation (like ÷). 
            For example, the sentence "12 ÷ 3 = 4" shows the result of dividing 12 by 3.
        </p>
        <p>
            Division sentences can also involve larger numbers, like "30 ÷ 5 = 6."
        </p>
    </div>

    <div id="understanding-fractions" class="content-box">
        <h2>Understanding Fractions</h2>
        <p>
            Fractions represent parts of a whole. In this lesson, we will explore the concept of fractions and their applications in everyday life.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>A fraction consists of a numerator (top number) and a denominator (bottom number).</li>
            <li>Fractions can be proper, improper, or mixed numbers.</li>
        </ul>
    </div>

    <div id="what-are-fractions" class="content-box">
        <h3>What Are Fractions?</h3>
        <p>
            A fraction indicates how many parts of a certain size we have. For example, in the fraction 1/2, the "1" is the numerator (part) and the "2" is the denominator (whole).
        </p>
    </div>

    <div id="fraction-examples" class="content-box">
        <h3>Fraction Examples</h3>
        <p>
            Examples of fractions include:
        </p>
        <ul>
            <li>1/4 (one-fourth)</li>
            <li>3/8 (three-eighths)</li>
            <li>5/3 (five-thirds)</li>
        </ul>
    </div>
</div>

</body>
</html>
