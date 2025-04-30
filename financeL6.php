<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons Dashboard - Introduction to Investment and Taxation</title>
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
            <li><a href="#intro-to-investment">Introduction to Investment & Taxation</a></li>
            <ul>
                <li><a href="#investment-basics">Basics of Investment</a></li>
                <li><a href="#taxation-fundamentals">Taxation Fundamentals</a></li>
                <li><a href="#tax-planning-strategies">Tax Planning Strategies</a></li>
            </ul>
        </ul>
        <div class="go-back">
            <a href="FinanceL.php">Go Back</a>
        </div>
    </div>
</div>

<div class="content-container">
    <div id="intro-to-investment" class="content-box">
        <h2>Introduction to Investment & Taxation</h2>
        <p>
            Investment and taxation are two fundamental aspects of personal finance. Understanding how to invest wisely and manage taxes efficiently is key to growing and preserving your wealth.
        </p>
        <p>
            This lesson covers the basics of investment, the principles of taxation, and tax planning strategies to minimize tax liabilities while maximizing returns.
        </p>
        <h3>Key Areas Covered:</h3>
        <ul>
            <li><strong>Investment Basics:</strong> Introduction to different investment options and strategies.</li>
            <li><strong>Taxation Fundamentals:</strong> Overview of how taxes work, tax brackets, and deductions.</li>
            <li><strong>Tax Planning:</strong> Techniques to optimize tax obligations and save money.</li>
        </ul>
    </div>

    <div id="investment-basics" class="content-box">
        <h3>Basics of Investment</h3>
        <p>
            Investment is the act of allocating resources, usually money, in the expectation of generating income or profit in the future. There are various types of investment options, each carrying different risks and rewards.
        </p>
        <h3>Common Investment Options:</h3>
        <ul>
            <li><strong>Stocks:</strong> Buying shares of a company, with potential for growth and dividends.</li>
            <li><strong>Bonds:</strong> Loaning money to a government or corporation, earning interest over time.</li>
            <li><strong>Real Estate:</strong> Purchasing property for rental income or appreciation in value.</li>
            <li><strong>Mutual Funds:</strong> A pool of money managed by professionals, invested in various securities.</li>
        </ul>
    </div>

    <div id="taxation-fundamentals" class="content-box">
        <h3>Taxation Fundamentals</h3>
        <p>
            Taxes are compulsory financial charges imposed by governments on individuals and businesses to fund public services. Understanding the basics of taxation is essential for financial planning and compliance.
        </p>
        <h3>Key Tax Concepts:</h3>
        <ul>
            <li><strong>Tax Brackets:</strong> A range of income amounts taxed at different rates, based on how much you earn.</li>
            <li><strong>Deductions:</strong> Expenses that can be subtracted from taxable income, reducing tax liability.</li>
            <li><strong>Tax Credits:</strong> Amounts that can be directly subtracted from the taxes you owe.</li>
        </ul>
    </div>

    <div id="tax-planning-strategies" class="content-box">
        <h3>Tax Planning Strategies</h3>
        <p>
            Tax planning involves structuring your finances in ways that minimize tax liabilities and maximize savings. Effective tax planning can save you money and improve your overall financial health.
        </p>
        <h3>Popular Tax Planning Techniques:</h3>
        <ul>
            <li><strong>Tax-Deferred Accounts:</strong> Contribute to retirement accounts like IRAs or 401(k)s to delay taxes until withdrawal.</li>
            <li><strong>Capital Gains Management:</strong> Strategically selling investments to minimize capital gains taxes.</li>
            <li><strong>Charitable Donations:</strong> Donating to qualified charities to reduce taxable income and possibly qualify for deductions.</li>
        </ul>
    </div>

</div>

</body>
</html>
