<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons Dashboard - Digital Safety & Security</title>
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
            <li><a href="#digital-safety">Introduction to Digital Safety</a></li>
            <ul>
                <li><a href="#online-threats">Common Online Threats</a></li>
                <li><a href="#privacy-protection">Privacy Protection</a></li>
                <li><a href="#password-security">Password Security</a></li>
            </ul>
            <li><a href="#basic-security-measures">Basic Security Measures</a></li>
            <ul>
                <li><a href="#software-updates">Importance of Software Updates</a></li>
                <li><a href="#secure-browsing">Safe and Secure Browsing</a></li>
                <li><a href="#antivirus">Using Antivirus & Firewalls</a></li>
            </ul>
        </ul>
        <div class="go-back">
            <a href="DigitalL.php">Go Back</a>
        </div>
    </div>
</div>

<div class="content-container">
    <!-- Introduction to Digital Safety -->
    <div id="digital-safety" class="content-box">
        <h2>Introduction to Digital Safety</h2>
        <p>
            Digital safety involves protecting your personal information, devices, and online presence from threats such as cyberattacks, scams, and data breaches. Understanding how to stay safe online is essential in today’s digital world.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Being aware of potential online risks helps you take preventative measures to stay safe.</li>
            <li>Digital safety applies to browsing the web, using social media, and communicating online.</li>
        </ul>
    </div>

    <!-- Common Online Threats -->
    <div id="online-threats" class="content-box">
        <h3>Common Online Threats</h3>
        <p>
            The internet is full of potential threats that can compromise your safety, privacy, and security. Being aware of these dangers is the first step in defending against them.
        </p>
        <h3>Examples of Online Threats:</h3>
        <ul>
            <li><strong>Phishing:</strong> Fraudulent emails or messages designed to trick you into sharing personal information.</li>
            <li><strong>Malware:</strong> Harmful software that can damage your device or steal your information.</li>
            <li><strong>Ransomware:</strong> A type of malware that locks your files and demands payment for their release.</li>
            <li><strong>Identity Theft:</strong> When someone steals your personal information to commit fraud.</li>
        </ul>
    </div>

    <!-- Privacy Protection -->
    <div id="privacy-protection" class="content-box">
        <h3>Privacy Protection</h3>
        <p>
            Protecting your personal privacy online means taking steps to limit what information others can see about you. This is important for maintaining control over your identity and personal data.
        </p>
        <h3>Tips for Privacy Protection:</h3>
        <ul>
            <li>Adjust privacy settings on social media platforms to control who can view your information.</li>
            <li>Avoid sharing sensitive information, like your address or financial details, publicly online.</li>
            <li>Use secure websites (look for "https" and a padlock symbol) when entering personal information.</li>
            <li>Be mindful of the personal information you share with apps and websites.</li>
        </ul>
    </div>

    <!-- Password Security -->
    <div id="password-security" class="content-box">
        <h3>Password Security</h3>
        <p>
            Strong passwords are one of the most basic but essential defenses against cyberattacks. A secure password protects your accounts from unauthorized access.
        </p>
        <h3>Tips for Creating Strong Passwords:</h3>
        <ul>
            <li>Use a combination of letters, numbers, and special characters.</li>
            <li>Create passwords that are at least 12 characters long.</li>
            <li>Avoid using easily guessable information like birthdays or names.</li>
            <li>Use different passwords for different accounts.</li>
            <li>Consider using a password manager to store and generate strong passwords.</li>
        </ul>
    </div>

    <!-- Basic Security Measures -->
    <div id="basic-security-measures" class="content-box">
        <h2>Basic Security Measures</h2>
        <p>
            There are several basic security measures you can implement to protect your devices and personal data from cyber threats.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Always keep your software up to date to protect against vulnerabilities.</li>
            <li>Practice safe browsing habits and use secure, trusted websites.</li>
            <li>Install antivirus software to detect and remove threats.</li>
        </ul>
    </div>

    <!-- Importance of Software Updates -->
    <div id="software-updates" class="content-box">
        <h3>Importance of Software Updates</h3>
        <p>
            Keeping your software up to date is one of the easiest ways to protect your devices from security threats. Updates often include patches for vulnerabilities that hackers could exploit.
        </p>
        <h3>Tips for Software Updates:</h3>
        <ul>
            <li>Enable automatic updates for your operating system and software.</li>
            <li>Regularly check for updates to apps and programs you use.</li>
            <li>Update your antivirus and firewall software to ensure you're protected from the latest threats.</li>
        </ul>
    </div>

    <!-- Safe and Secure Browsing -->
    <div id="secure-browsing" class="content-box">
        <h3>Safe and Secure Browsing</h3>
        <p>
            Practicing safe browsing habits protects you from many common online threats. Be mindful of the websites you visit, the links you click, and the information you provide.
        </p>
        <h3>Secure
