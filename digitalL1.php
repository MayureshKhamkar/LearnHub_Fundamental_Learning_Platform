<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons Dashboard - Digital Devices</title>
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
        <h2>Lessons</h2>
        <ul>
            <li><a href="#intro-digital-devices">Introduction to Digital Devices</a></li>
            <ul>
                <li><a href="#what-are-digital-devices">What Are Digital Devices?</a></li>
                <li><a href="#types-of-devices">Types of Digital Devices</a></li>
                <li><a href="#basic-operations">Basic Operations</a></li>
            </ul>
            <li><a href="#internet-basics">Internet Basics</a></li>
        </ul>
        <div class="go-back">
            <a href="DigitalL.php">Go Back</a>
        </div>
    </div>
</div>

<div class="content-container">
    <!-- Introduction to Digital Devices -->
    <div id="intro-digital-devices" class="content-box">
        <h2>Introduction to Digital Devices</h2>
        <p>
            Digital devices are tools like computers, smartphones, and tablets that allow us to access the internet, communicate with others, and perform tasks like writing documents, creating spreadsheets, and more.
        </p>
        <p>
            Learning how to use these devices is essential in today’s world, as they are crucial in both personal and professional environments.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Digital devices help us perform daily tasks like communication, learning, and entertainment.</li>
            <li>They come in various forms, including laptops, smartphones, and tablets.</li>
        </ul>
    </div>

    <!-- What Are Digital Devices? -->
    <div id="what-are-digital-devices" class="content-box">
        <h3>What Are Digital Devices?</h3>
        <p>
            Digital devices are electronic tools that allow us to process and store data. They range from personal computers to mobile phones, and they enable us to perform tasks like sending emails, browsing the internet, and playing games.
        </p>
        <h3>Examples of Digital Devices:</h3>
        <ul>
            <li>Personal Computers (Desktops and Laptops).</li>
            <li>Smartphones (e.g., iPhone, Android).</li>
            <li>Tablets (e.g., iPad).</li>
            <li>Smartwatches and other wearable technology.</li>
        </ul>
    </div>

    <!-- Types of Digital Devices -->
    <div id="types-of-devices" class="content-box">
        <h3>Types of Digital Devices</h3>
        <p>
            Digital devices can be classified based on their functionality and size. Below are some common types of digital devices:
        </p>
        <ul>
            <li><strong>Desktops and Laptops:</strong> Typically used for work and entertainment, offering a wide range of functions.</li>
            <li><strong>Smartphones:</strong> Portable devices used for communication, internet access, and applications.</li>
            <li><strong>Tablets:</strong> Larger than smartphones, offering a touchscreen interface ideal for reading, browsing, and light work.</li>
        </ul>
    </div>

    <!-- Basic Operations -->
    <div id="basic-operations" class="content-box">
        <h3>Basic Operations</h3>
        <p>
            Knowing how to operate digital devices is essential for using them effectively. Here are some basic operations you need to be familiar with:
        </p>
        <h3>Common Basic Operations:</h3>
        <ul>
            <li><strong>Turning On/Off:</strong> Learning how to power up and shut down devices safely.</li>
            <li><strong>Using a Mouse and Keyboard:</strong> Understanding how to navigate using a mouse and type using a keyboard is fundamental.</li>
            <li><strong>Touchscreen Navigation:</strong> Many modern devices use touchscreens, so learning gestures like swiping and tapping is essential.</li>
        </ul>
    </div>

    
</div>

</body>
</html>
