<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Test with Timer</title>
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
            border:2px solid;
            background-color: linear-gradient(135deg, #e0f7fa, #e1bee7);
            /* border-bottom: 1px solid #ddd; */
            border-radius:6rem;
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
            border:3px solid;
            background-color:  linear-gradient(135deg, #e0f7fa, #e1bee7);
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

        <div class="test-title">Basic Math Test</div>
        <!-- Test Description -->
        <div class="test-description">Test your skills on basic math concepts before the time runs out!</div>

        <!-- Form for Questions -->
        <form id="mathTestForm">
            <!-- Question 1 -->
            <div class="question">
                <strong>1. What is 5 + 3?</strong><br>
                <input type="radio" name="questions[1]" value="6" required> 6 <br>
                <input type="radio" name="questions[1]" value="8"> 8 <br>
                <input type="radio" name="questions[1]" value="9"> 9
            </div>

            <!-- Question 2 -->
            <div class="question">
                <strong>2. What is 10 - 7?</strong><br>
                <input type="radio" name="questions[2]" value="2" required> 2 <br>
                <input type="radio" name="questions[2]" value="3"> 3 <br>
                <input type="radio" name="questions[2]" value="5"> 5
            </div>

            <!-- Question 3 -->
            <div class="question">
                <strong>3. What is 4 × 3?</strong><br>
                <input type="radio" name="questions[3]" value="12" required> 12 <br>
                <input type="radio" name="questions[3]" value="15"> 15 <br>
                <input type="radio" name="questions[3]" value="9"> 9
            </div>

            <!-- Question 4 -->
            <div class="question">
                <strong>4. What is 16 ÷ 4?</strong><br>
                <input type="radio" name="questions[4]" value="2" required> 2 <br>
                <input type="radio" name="questions[4]" value="4"> 4 <br>
                <input type="radio" name="questions[4]" value="6"> 6
            </div>

            <!-- Question 5 -->
            <div class="question">
                <strong>5. What is 1/2 of 8?</strong><br>
                <input type="radio" name="questions[5]" value="3" required> 3 <br>
                <input type="radio" name="questions[5]" value="4"> 4 <br>
                <input type="radio" name="questions[5]" value="5"> 5
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
        const formElement = document.getElementById('mathTestForm');
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

            fetch('test.php', {
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
