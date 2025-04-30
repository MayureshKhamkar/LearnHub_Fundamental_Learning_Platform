<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons Dashboard - Internet & Email</title>
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
            <li><a href="#intro-internet">Introduction to the Internet</a></li>
            <ul>
                <li><a href="#what-is-internet">What is the Internet?</a></li>
                <li><a href="#browsing-basics">Browsing Basics</a></li>
                <li><a href="#search-engines">Using Search Engines</a></li>
            </ul>
            <li><a href="#intro-email">Introduction to Email</a></li>
            <ul>
                <li><a href="#setting-up-email">Setting Up an Email Account</a></li>
                <li><a href="#sending-receiving-email">Sending and Receiving Email</a></li>
                <li><a href="#email-etiquette">Email Etiquette</a></li>
            </ul>
        </ul>
        <div class="go-back">
            <a href="DigitalL.php">Go Back</a>
        </div>
    </div>
</div>

<div class="content-container">
    <!-- Introduction to the Internet -->
    <div id="intro-internet" class="content-box">
        <h2>Introduction to the Internet</h2>
        <p>
            The internet is a global network that connects millions of computers, allowing people to communicate and share information. It enables users to access websites, send emails, and use various services online.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>The internet allows global communication and information sharing.</li>
            <li>You can access websites, watch videos, send emails, and use social media through the internet.</li>
        </ul>
    </div>

    <!-- What is the Internet? -->
    <div id="what-is-internet" class="content-box">
        <h3>What is the Internet?</h3>
        <p>
            The internet is a vast network of interconnected devices and servers that allow users to communicate, access information, and perform tasks online. It connects billions of devices worldwide and supports services like email, websites, and social media platforms.
        </p>
        <h3>Common Uses of the Internet:</h3>
        <ul>
            <li>Browsing websites for information, news, and entertainment.</li>
            <li>Communicating via email and instant messaging.</li>
            <li>Watching videos, listening to music, and streaming content.</li>
            <li>Shopping online and banking.</li>
        </ul>
    </div>

    <!-- Browsing Basics -->
    <div id="browsing-basics" class="content-box">
        <h3>Browsing Basics</h3>
        <p>
            A web browser is a software application that allows you to access and view websites. Common browsers include Google Chrome, Mozilla Firefox, and Safari. To browse the web, you need to type a web address (URL) in the browser's address bar.
        </p>
        <h3>Steps for Basic Browsing:</h3>
        <ul>
            <li>Open a browser like Chrome or Firefox.</li>
            <li>Type a website address (e.g., www.google.com) in the address bar.</li>
            <li>Press Enter to load the website.</li>
            <li>Click links to navigate from one webpage to another.</li>
        </ul>
    </div>

    <!-- Using Search Engines -->
    <div id="search-engines" class="content-box">
        <h3>Using Search Engines</h3>
        <p>
            A search engine like Google or Bing helps you find information on the internet. You can type a question or keywords into the search bar, and the search engine will show you a list of websites that match your query.
        </p>
        <h3>Steps to Use a Search Engine:</h3>
        <ul>
            <li>Go to a search engine (e.g., www.google.com).</li>
            <li>Type what you're looking for (e.g., "best smartphones").</li>
            <li>Press Enter, and browse through the search results.</li>
            <li>Click on a result to visit the website.</li>
        </ul>
    </div>

    <!-- Introduction to Email -->
    <div id="intro-email" class="content-box">
        <h2>Introduction to Email</h2>
        <p>
            Email, short for electronic mail, is a method of exchanging messages over the internet. It's one of the most common forms of communication online, allowing users to send and receive messages, attachments, and files.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Email allows you to send written messages and files to other people through the internet.</li>
            <li>Popular email providers include Gmail, Yahoo, and Outlook.</li>
        </ul>
    </div>

    <!-- Setting Up an Email Account -->
    <div id="setting-up-email" class="content-box">
        <h3>Setting Up an Email Account</h3>
        <p>
            To send and receive emails, you need an email account. Services like Gmail, Yahoo Mail, and Outlook offer free email accounts.
        </p>
        <h3>Steps to Set Up a Gmail Account:</h3>
        <ul>
            <li>Go to www.gmail.com and click "Create Account."</li>
            <li>Enter your first and last name.</li>
            <li>Choose a username (this will be your email address).</li>
            <li>Set a strong password and confirm it.</li>
            <li>Follow the on-screen instructions to complete the setup.</li>
        </ul>
    </div>

    <!-- Sending and Receiving Email -->
    <div id="sending-receiving-email" class="content-box">
        <h3>Sending and Receiving Email</h3>
        <p>
            Once you have set up an email account, you can send emails to others and receive messages from them. You can also attach files like documents or images to your emails.
        </p>
        <h3>Steps to Send an Email:</h3>
        <ul>
            <li>Open your email provider (e.g., Gmail) and click on "Compose."</li>
            <li>Enter the recipient's email address in the "To" field.</li>
            <li>Type your message in the body of the email.</li>
            <li>Add a subject to indicate the email's purpose.</li>
            <li>Click "Send" to deliver your email.</li>
        </ul>
    </div>

    <!-- Email Etiquette -->
    <div id="email-etiquette" class="content-box">
        <h3>Email Etiquette</h3>
        <p>
            Email etiquette refers to the proper way to communicate via email. It's important to follow good practices to make sure your emails are clear and respectful.
        </p>
        <h3>Basic Email Etiquette Tips:</h3>
        <ul>
            <li>Use a clear and concise subject line.</li>
            <li>Start with a polite greeting (e.g., "Dear [Name]").</li>
            <li>Keep your message short and to the point.</li>
            <li>Proofread your email before sending it.</li>
            <li>Use a polite closing (e.g., "Sincerely," "Best regards").</li>
        </ul>
    </div>

</div>

</body>
</html>
