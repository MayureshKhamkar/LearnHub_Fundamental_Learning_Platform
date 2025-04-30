<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Digital Literacy Test with Timer</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        /* Navigation bar */
        #navbar {
            border: 2px solid;
            background-color: linear-gradient(135deg, #e0f7fa, #e1bee7);
            border-radius: 6rem;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        #navbar nav p {
            font-size: 1.5rem;
        }

        #navbar nav a {
            color: #333;
            text-decoration: none;
            padding: 0.7rem 1rem;
            font-size: 1.4rem;
            transition: color 0.3s ease;
        }

        #navbar nav a:hover {
            color: #6a0dad;
        }

        .test-container {
            border: 2px solid;
            background: linear-gradient(135deg, #e0f7fa, #e1bee7);
            border-radius: 0.8rem;
            padding: 2rem;
            margin: 2rem;
            text-align: center;
            font-size: 1.2rem;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }

        .test-title {
            font-size: 1.8rem;
            color: #6a0dad;
            margin-bottom: 0.5rem;
        }

        .test-description {
            color: #333;
            margin-bottom: 1rem;
        }

        .timer-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 1rem;
        }

        .timer-container i {
            font-size: 1.5rem;
            color: #6a0dad;
            margin-right: 0.5rem;
        }

        #timer {
            font-size: 1.5rem;
            color: #6a0dad;
        }

        .question {
            border: 3px solid;
            background-color: linear-gradient(135deg, #e0f7fa, #e1bee7);
            padding: 1.5rem;
            margin-bottom: 1.2rem;
            border-radius: 1rem;
            justify-content: right;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
        }

        .test-button {
            background-color: #6a0dad;
            color: #fff;
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .test-button:hover {
            background-color: #5a099d;
        }

        .hidden {
            display: none;
        }

        .result {
            margin-top: 1rem;
            font-size: 1.4rem;
            color: #333;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <div id="navbar">
        <div class="logo">
            <p>Learn Hub</p> <!-- Add your logo -->
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="courses.php">Courses</a>
            <a href="index.php">Profile</a>
        </nav>
    </div>

    <!-- Test Form and Result -->
    <div class="test-container">
        <!-- Timer Display -->
        <div class="timer-container">
            <i class="fas fa-clock"></i>
            <span id="timer">03:00</span> <!-- 3-minute timer -->
        </div>

        <div class="test-title">Digital Literacy Test</div>
        <!-- Test Description -->
        <div class="test-description">Test your knowledge on digital devices, the internet, and online safety!</div>

        <!-- Form for Questions -->
        <form id="digitalLiteracyTestForm">
            <!-- Question 1 -->
            <div class="question">
                <strong>1. What is an example of a digital device?</strong><br>
                <input type="radio" name="questions[1]" value="Smartphone" required> Smartphone <br>
                <input type="radio" name="questions[1]" value="Typewriter"> Typewriter <br>
                <input type="radio" name="questions[1]" value="Calculator"> Calculator
            </div>

            <!-- Question 2 -->
            <div class="question">
                <strong>2. Which of the following is needed to access the internet?</strong><br>
                <input type="radio" name="questions[2]" value="Web Browser" required> Web Browser <br>
                <input type="radio" name="questions[2]" value="Word Processor"> Word Processor <br>
                <input type="radio" name="questions[2]" value="Spreadsheet Software"> Spreadsheet Software
            </div>

            <!-- Question 3 -->
            <div class="question">
                <strong>3. What is the primary purpose of email?</strong><br>
                <input type="radio" name="questions[3]" value="To send physical letters" required> To send physical letters <br>
                <input type="radio" name="questions[3]" value="To send messages electronically"> To send messages electronically <br>
                <input type="radio" name="questions[3]" value="To make phone calls"> To make phone calls
            </div>

            <!-- Question 4 -->
            <div class="question">
                <strong>4. Which of the following is a common social media platform?</strong><br>
                <input type="radio" name="questions[4]" value="LinkedIn" required> LinkedIn <br>
                <input type="radio" name="questions[4]" value="Notepad"> Notepad <br>
                <input type="radio" name="questions[4]" value="Excel"> Excel
            </div>

            <!-- Question 5 -->
            <div class="question">
                <strong>5. What does it mean to 'share' on social media?</strong><br>
                <input type="radio" name="questions[5]" value="Post someone else's content" required> Post someone else's content <br>
                <input type="radio" name="questions[5]" value="Delete a post"> Delete a post <br>
                <input type="radio" name="questions[5]" value="Block a user"> Block a user
            </div>

            <!-- Question 6 -->
            <div class="question">
                <strong>6. What is a strong password?</strong><br>
                <input type="radio" name="questions[6]" value="123456" required> 123456 <br>
                <input type="radio" name="questions[6]" value="P@ssw0rd!"> P@ssw0rd! <br>
                <input type="radio" name="questions[6]" value="password"> password
            </div>

            <!-- Question 7 -->
            <div class="question">
                <strong>7. What is a phishing attack?</strong><br>
                <input type="radio" name="questions[7]" value="A type of gardening" required> A type of gardening <br>
                <input type="radio" name="questions[7]" value="Fraudulent attempts to obtain sensitive information"> Fraudulent attempts to obtain sensitive information <br>
                <input type="radio" name="questions[7]" value="A computer virus"> A computer virus
            </div>

            <!-- Question 8 -->
            <div class="question">
                <strong>8. Which of these helps protect your online privacy?</strong><br>
                <input type="radio" name="questions[8]" value="Using a VPN" required> Using a VPN <br>
                <input type="radio" name="questions[8]" value="Posting personal information"> Posting personal information <br>
                <input type="radio" name="questions[8]" value="Disabling security settings"> Disabling security settings
            </div>

            <!-- Question 9 -->
            <div class="question">
                <strong>9. What is the purpose of antivirus software?</strong><br>
                <input type="radio" name="questions[9]" value="To make the computer faster" required> To make the computer faster <br>
                <input type="radio" name="questions[9]" value="To protect against malware"> To protect against malware <br>
                <input type="radio" name="questions[9]" value="To backup files"> To backup files
            </div>

            <!-- Question 10 -->
            <div class="question">
                <strong>10. How can you verify the security of a website?</strong><br>
                <input type="radio" name="questions[10]" value="By checking for HTTPS in the URL" required> By checking for HTTPS in the URL <br>
                <input type="radio" name="questions[10]" value="By looking at the website's color scheme"> By looking at the website's color scheme <br>
                <input type="radio" name="questions[10]" value="By the number of advertisements"> By the number of advertisements
            </div>

            <!-- Submit Button -->
            <button class="test-button" type="submit">Submit</button>
        </form>

        <!-- Result Section (Initially Hidden) -->
        <div class="result hidden" id="testResult"></div>
    </div>

    <!-- JavaScript Timer & AJAX Submission -->
    <script>
        // Timer logic (3 minutes countdown)
        let timeLeft = 180; // 3 minutes in seconds
        const timerElement = document.getElementById('timer');
        const resultElement = document.getElementById('testResult');
        const formElement = document.getElementById('digitalLiteracyTestForm');
        let countdown;

        const startTimer = () => {
            countdown = setInterval(() => {
                let minutes = Math.floor(timeLeft / 60);
                let seconds = timeLeft % 60;
                seconds = seconds < 10 ? '0' + seconds : seconds;
                timerElement.textContent = `${minutes}:${seconds}`;

                timeLeft--;

                // If time runs out, submit the form automatically
                if (timeLeft < 0) {
                    clearInterval(countdown);
                    submitTestForm(); // Automatically submit
                }
            }, 1000);
        };

        // Start the timer
        startTimer();

        // Handle form submission via AJAX
        formElement.addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent default form submission
            clearInterval(countdown); // Stop the timer
            submitTestForm(); // Call AJAX submission
        });

        // AJAX form submission function
        function submitTestForm() {
            const formData = new FormData(formElement);

            fetch('digitaltest_res.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Hide form and display result
                formElement.classList.add('hidden');
                resultElement.classList.remove('hidden');
                resultElement.innerHTML = `You scored <strong>${data.score}</strong> out of ${data.total_questions}.`;
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>

</body>
</html>
