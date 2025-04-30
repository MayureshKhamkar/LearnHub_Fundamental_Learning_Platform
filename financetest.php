<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Finance Test with Timer</title>
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
            <p>Learn Hub</p>
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

        <div class="test-title">Finance Basics Test</div>
        <div class="test-description">Test your knowledge on basic banking and finance concepts!</div>

        <!-- Form for Questions -->
        <form id="financeTestForm">
            <!-- Question 1 -->
            <div class="question">
                <strong>1. What is the primary function of a bank?</strong><br>
                <input type="radio" name="questions[1]" value="Issue Loans" required> Issue Loans <br>
                <input type="radio" name="questions[1]" value="Hold Currency"> Hold Currency <br>
                <input type="radio" name="questions[1]" value="Store Gold"> Store Gold
            </div>

            <!-- Question 2 -->
            <div class="question">
                <strong>2. What is a certificate of deposit (CD)?</strong><br>
                <input type="radio" name="questions[2]" value="A savings account with restrictions" required> A savings account with restrictions <br>
                <input type="radio" name="questions[2]" value="A type of credit card"> A type of credit card <br>
                <input type="radio" name="questions[2]" value="A loan for education"> A loan for education
            </div>

            <!-- Question 3 -->
            <div class="question">
                <strong>3. Which of these is a budgeting technique?</strong><br>
                <input type="radio" name="questions[3]" value="50/30/20 Rule" required> 50/30/20 Rule <br>
                <input type="radio" name="questions[3]" value="Compound Interest"> Compound Interest <br>
                <input type="radio" name="questions[3]" value="Balance Transfer"> Balance Transfer
            </div>

            <!-- Question 4 -->
            <div class="question">
                <strong>4. What is a key advantage of digital banking?</strong><br>
                <input type="radio" name="questions[4]" value="24/7 Access" required> 24/7 Access <br>
                <input type="radio" name="questions[4]" value="Free Cash Withdrawals"> Free Cash Withdrawals <br>
                <input type="radio" name="questions[4]" value="Interest-Free Loans"> Interest-Free Loans
            </div>

            <!-- Question 5 -->
            <div class="question">
                <strong>5. What does "diversifying investments" mean?</strong><br>
                <input type="radio" name="questions[5]" value="Investing all money in one stock" required> Investing all money in one stock <br>
                <input type="radio" name="questions[5]" value="Spreading investments across different assets"> Spreading investments across different assets <br>
                <input type="radio" name="questions[5]" value="Saving in a fixed deposit"> Saving in a fixed deposit
            </div>

            <!-- Question 6 -->
            <div class="question">
                <strong>6. What is the purpose of a savings account?</strong><br>
                <input type="radio" name="questions[6]" value="To save money and earn interest" required> To save money and earn interest <br>
                <input type="radio" name="questions[6]" value="To get quick loans"> To get quick loans <br>
                <input type="radio" name="questions[6]" value="To pay bills online"> To pay bills online
            </div>

            <!-- Question 7 -->
            <div class="question">
                <strong>7. Which of the following is a secured loan?</strong><br>
                <input type="radio" name="questions[7]" value="Credit Card Loan" required> Credit Card Loan <br>
                <input type="radio" name="questions[7]" value="Car Loan"> Car Loan <br>
                <input type="radio" name="questions[7]" value="Personal Loan"> Personal Loan
            </div>

            <!-- Question 8 -->
            <div class="question">
                <strong>8. How does compound interest benefit investors?</strong><br>
                <input type="radio" name="questions[8]" value="It grows interest on interest over time" required> It grows interest on interest over time <br>
                <input type="radio" name="questions[8]" value="It prevents tax deduction"> It prevents tax deduction <br>
                <input type="radio" name="questions[8]" value="It is a risk-free investment"> It is a risk-free investment
            </div>

            <!-- Question 9 -->
            <div class="question">
                <strong>9. What is the implication of taking a loan with high interest?</strong><br>
                <input type="radio" name="questions[9]" value="Lower cost over time" required> Lower cost over time <br>
                <input type="radio" name="questions[9]" value="Higher cost over time"> Higher cost over time <br>
                <input type="radio" name="questions[9]" value="No risk of default"> No risk of default
            </div>

            <!-- Question 10 -->
            <div class="question">
                <strong>10. What is the benefit of contributing to a retirement fund?</strong><br>
                <input type="radio" name="questions[10]" value="Reducing taxable income for specific reasons" required> Reducing taxable income for specific reasons <br>
                <input type="radio" name="questions[10]" value="Receiving immediate cash back"> Receiving immediate cash back <br>
                <input type="radio" name="questions[10]" value="Winning a lottery"> Winning a lottery
            </div>

            <!-- Submit Button -->
            <button type="submit" class="test-button">Submit Test</button>
        </form>

        <!-- Result Display -->
        <div id="result" class="hidden result"></div>
    </div>

    <!-- JavaScript -->
    <script>
        const formElement = document.getElementById('financeTestForm');
        const resultElement = document.getElementById('result');
        const timerElement = document.getElementById('timer');
        let countdown;

        let secondsRemaining = 180; // 3 minutes timer (180 seconds)

        // Function to update timer every second
        function updateTimer() {
            let minutes = Math.floor(secondsRemaining / 60);
            let seconds = secondsRemaining % 60;
            timerElement.textContent = `${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            if (secondsRemaining <= 0) {
                clearInterval(countdown);
                formElement.submit(); // Automatically submit the form when time is up
            } else {
                secondsRemaining--;
            }
        }

        // Start the countdown timer
        countdown = setInterval(updateTimer, 1000);

        formElement.addEventListener('submit', function (e) {
            e.preventDefault();
            clearInterval(countdown); // Stop the timer

            // Send FormData instead of JSON
            const formData = new FormData(formElement);
            fetch('financetest_res.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Display the result in the result div
                formElement.classList.add('hidden');
                resultElement.classList.remove('hidden');
                resultElement.innerHTML = `You scored <strong>${data.score}</strong> out of ${data.total_questions}.`;
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>
