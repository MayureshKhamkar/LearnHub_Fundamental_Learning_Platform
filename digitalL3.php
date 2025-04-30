<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons Dashboard - Social Media & Communication</title>
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
            <li><a href="#intro-social-media">Introduction to Social Media</a></li>
            <ul>
                <li><a href="#what-is-social-media">What is Social Media?</a></li>
                <li><a href="#popular-platforms">Popular Social Media Platforms</a></li>
                <li><a href="#responsible-usage">Responsible Social Media Usage</a></li>
            </ul>
            <li><a href="#communication-tools">Communication Tools</a></li>
            <ul>
                <li><a href="#instant-messaging">Instant Messaging Apps</a></li>
                <li><a href="#video-conferencing">Video Conferencing Tools</a></li>
                <li><a href="#online-safety">Online Communication Safety</a></li>
            </ul>
        </ul>
        <div class="go-back">
            <a href="DigitalL.php">Go Back</a>
        </div>
    </div>
</div>

<div class="content-container">
    <!-- Introduction to Social Media -->
    <div id="intro-social-media" class="content-box">
        <h2>Introduction to Social Media</h2>
        <p>
            Social media refers to websites and applications that allow users to create content, share information, and engage in social networking. It has become an integral part of daily communication, allowing people to connect globally.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Social media allows you to share thoughts, photos, videos, and interact with others.</li>
            <li>Platforms range from social networking (Facebook) to media sharing (Instagram) and professional networking (LinkedIn).</li>
        </ul>
    </div>

    <!-- What is Social Media? -->
    <div id="what-is-social-media" class="content-box">
        <h3>What is Social Media?</h3>
        <p>
            Social media platforms are websites and apps that enable users to create and share content, including text, images, and videos, with their networks or the public. These platforms allow real-time communication and facilitate online communities based on shared interests.
        </p>
        <h3>Common Uses of Social Media:</h3>
        <ul>
            <li>Sharing personal updates, photos, and videos with friends and family.</li>
            <li>Connecting with communities of interest, such as hobby groups or professional networks.</li>
            <li>Following influencers, brands, and organizations for news, updates, and promotions.</li>
        </ul>
    </div>

    <!-- Popular Social Media Platforms -->
    <div id="popular-platforms" class="content-box">
        <h3>Popular Social Media Platforms</h3>
        <p>
            Various platforms cater to different forms of communication and content sharing. Some of the most popular social media platforms include:
        </p>
        <ul>
            <li><strong>Facebook:</strong> A platform for connecting with friends, sharing updates, photos, and videos, and joining interest groups.</li>
            <li><strong>Instagram:</strong> A photo and video-sharing platform focused on visual content, popular for sharing lifestyle updates.</li>
            <li><strong>Twitter:</strong> A microblogging platform where users post short updates (tweets) and follow others for news and information.</li>
            <li><strong>LinkedIn:</strong> A professional networking platform for connecting with colleagues, finding job opportunities, and sharing industry knowledge.</li>
        </ul>
    </div>

    <!-- Responsible Social Media Usage -->
    <div id="responsible-usage" class="content-box">
        <h3>Responsible Social Media Usage</h3>
        <p>
            Using social media responsibly involves maintaining privacy, avoiding misinformation, and respecting others. It is important to understand the impact of what you share and how it may affect your online reputation.
        </p>
        <h3>Tips for Responsible Usage:</h3>
        <ul>
            <li>Set strong privacy settings to control who sees your content.</li>
            <li>Think before sharing personal information publicly.</li>
            <li>Avoid engaging in or spreading false or harmful content.</li>
        </ul>
    </div>

    <!-- Introduction to Communication Tools -->
    <div id="communication-tools" class="content-box">
        <h2>Communication Tools</h2>
        <p>
            Communication tools such as instant messaging apps and video conferencing platforms allow real-time communication with others over the internet. These tools are widely used for personal and professional communication.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Instant messaging allows quick text-based conversations.</li>
            <li>Video conferencing enables face-to-face virtual meetings with individuals or groups.</li>
        </ul>
    </div>

    <!-- Instant Messaging Apps -->
    <div id="instant-messaging" class="content-box">
        <h3>Instant Messaging Apps</h3>
        <p>
            Instant messaging apps allow users to exchange text, images, videos, and voice messages in real-time. These apps also support group chats and file sharing.
        </p>
        <h3>Popular Instant Messaging Apps:</h3>
        <ul>
            <li><strong>WhatsApp:</strong> A widely used messaging app that supports text, voice, and video calls.</li>
            <li><strong>Facebook Messenger:</strong> A messaging platform integrated with Facebook for sending texts, media, and making video calls.</li>
            <li><strong>Telegram:</strong> A secure messaging app offering encrypted chats and file sharing.</li>
        </ul>
    </div>

    <!-- Video Conferencing Tools -->
    <div id="video-conferencing" class="content-box">
        <h3>Video Conferencing Tools</h3>
        <p>
            Video conferencing tools allow users to conduct virtual meetings, enabling face-to-face communication with individuals or groups over the internet. These tools have become essential for remote work, online classes, and virtual events.
        </p>
        <h3>Popular Video Conferencing Tools:</h3>
        <ul>
            <li><strong>Zoom:</strong> A widely used platform for video calls, webinars, and virtual meetings.</li>
            <li><strong>Google Meet:</strong> A free video conferencing tool integrated with Google accounts, allowing group video calls.</li>
            <li><strong>Microsoft Teams:</strong> A professional tool for team collaboration, offering video meetings, file sharing, and chat features.</li>
        </ul>
    </div>

    <!-- Online Communication Safety -->
    <div id="online-safety" class="content-box">
        <h3>Online Communication Safety</h3>
        <p>
            It's important to practice safety when using communication tools online. Be aware of privacy settings, avoid sharing sensitive information, and be cautious of suspicious messages or links.
        </p>
        <h3>Safety Tips:</h3>
        <ul>
            <li>Use strong, unique passwords for each platform.</li>
            <li>Enable two-factor authentication where possible.</li>
            <li>Be cautious when clicking on unknown links or downloading files from unknown sources.</li>
        </ul>
    </div>

</div>

</body>
</html>
