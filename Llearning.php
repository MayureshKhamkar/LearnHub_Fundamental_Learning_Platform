<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Learning Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="Llearning.css">
    <style>
        .video-container {
            display: none; /* Initially hide the video */
            margin-top: 20px;
        }
        .show-video-btn {
            padding: 10px 15px;
            background-color: #6a0dad;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }
        .show-video-btn:hover {
            background-color: #5a0a9d;
        }
    </style>
</head>
<body>

<!-- Sidebar toggle icon -->
<div class="toggle-sidebar">
    <i class="fas fa-bars"></i>
</div>

<div class="sidebar-container" id="sidebar">
    <div class="sidebar">
        <h2>English Lessons</h2>
        <ul>
            <li><a href="#intro-to-vocabulary">Introduction to Alphabets</a></li>
            <ul>
                <li><a href="#numbers-learning">Learning Numbers</a></li>
                <li><a href="#basic-greetings">Basic Greetings</a></li>
                <li><a href="#common-phrases">Common Phrases</a></li>
                <li><a href="#word-formation">Word Formation</a></li>
            </ul>
            <li><a href="#sentence-structure">Sentence Structure</a></li>
            <ul>
                <li><a href="#simple-sentences">Simple Sentences</a></li>
                <li><a href="#questions">Forming Questions</a></li>
                <li><a href="#negations">Negations</a></li>
            </ul>
        </ul>
        <div class="go-back">
            <a href="index.php">Go Back</a>
        </div>
    </div>
</div>

<div class="content-container" id="content">
    <div id="intro-to-vocabulary" class="content-box">
        
        <h2>Introduction to Vocabulary</h2>
        
        <!-- Content goes above the video button -->
        <p>
            Building a strong vocabulary is the first step to mastering English Alphabets. In this section, we will cover letters.
        </p>
        <p>
            Understanding basic English letters is essential for communication. Let's start with A to Z.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Learn the Alphabets</li>
            <li>Practice by learning the strokes and pronunciation.</li>
        </ul>

        <!-- Button to show video -->
        <button class="show-video-btn" id="show-video-btn">View Video</button>

        <!-- Video container, initially hidden -->
        <div class="video-container" id="video-container">
            <video controls>
                <source src="videos/Lang1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="numbers-learning" class="content-box">
        
        <h2>Introduction to Numbers</h2>
        
        <!-- Content goes above the video button -->
        <p>
            Building a strong vocabulary is the first step to mastering English Numbers. In this section, we will cover numbers.
        </p>
        <p>
            Understanding basic English numbers is essential for communication. Let's start with 1 to 10.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Learn the Numbers</li>
            <li>Practice by learning the strokes and pronunciation of Numbers</li>
        </ul>

        <!-- Button to show video -->
        <button class="show-video-btn" id="show-video-btn-numbers">View Video</button>

        <!-- Video container, initially hidden -->
        <div class="video-container" id="video-container-numbers">
            <video controls>
                <source src="videos/Lang2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>


    <div id="basic-greetings" class="content-box">
    
        <h2>Learning Basic Greetings</h2>
        <!-- Content goes above the video button -->
        <p>
            Building a strong vocabulary is the first step to mastering English Numbers. In this section, we will cover numbers.
        </p>
        <p>
            Understanding basic English numbers is essential for communication. Let's start with 1 to 10.
        </p>
        <h3>Basic Greetings</h3>
        <p>
            Greetings are a great way to start learning any language. Learn how to say "Hello," "Good morning," and other common English greetings.
        </p>
        <h3>Examples:</h3>
        <ul>
            <li><strong>Hello:</strong> "Hello", "Hi"</li>
            <li><strong>Goodbye:</strong> "Goodbye", "Bye"</li>
            <li><strong>Good morning:</strong> "Good morning", "Morning"</li>
            <li><strong>Good night:</strong> "Good night", "Night"</li>
        </ul>

        <!-- Button to show video -->
        <button class="show-video-btn" id="show-video-btn-greeting">View Video</button>

        <!-- Video container, initially hidden -->
        <div class="video-container" id="video-container-numbers">
            <video controls>
                <source src="videos/Lang3.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>


    
    <!-- Additional content goes here -->
</div>

<script>
    // JavaScript to toggle sidebar
    const toggleButton = document.querySelector('.toggle-sidebar');
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');

    toggleButton.addEventListener('click', function () {
        // Toggle sidebar visibility
        sidebar.classList.toggle('active');

        // Toggle content shift
        content.classList.toggle('active');

        // Toggle button position when sidebar is open/close
        toggleButton.classList.toggle('active');
    });

    // JavaScript to show/hide video when button is clicked
    const showVideoButton = document.getElementById('show-video-btn');
    const videoContainer = document.getElementById('video-container');

    showVideoButton.addEventListener('click', function () {
        videoContainer.style.display = 'block'; // Show the video container
        showVideoButton.style.display = 'none'; // Hide the button after clicking
    });

    // For Numbers video section
    const showVideoButtonNumbers = document.getElementById('show-video-btn-numbers');
    const videoContainerNumbers = document.getElementById('video-container-numbers');

    showVideoButtonNumbers.addEventListener('click', function () {
        videoContainerNumbers.style.display = 'block'; // Show the video container
        showVideoButtonNumbers.style.display = 'none'; // Hide the button after clicking
    });
</script>

</body>
</html>
