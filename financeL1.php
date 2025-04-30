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
            <li><a href="#intro-to-banking">Introduction to Banking</a></li>
            <ul>
                <li><a href="#what-is-banking">What is Banking?</a></li>
                <li><a href="#types-of-banks">Types of Banks</a></li>
                <li><a href="#importance-of-banking">Importance of Banking</a></li>
            </ul>
            <li><a href="#bank-accounts">Bank Accounts</a></li>
            <ul>
                <li><a href="#savings-account">Savings Account</a></li>
                <li><a href="#checking-account">Checking Account</a></li>
                <li><a href="#fixed-deposit">Fixed Deposit</a></li>
            </ul>
        </ul>
        <div class="go-back">
            <a href="financeL.php">Go Back</a>
        </div>
    </div>
</div>

<div class="content-container">
    <div id="intro-to-banking" class="content-box">
        <h2>Introduction to Banking</h2>
        <p>
            Banking refers to the activities of accepting deposits, lending money, and providing financial services by banks. 
            It plays a crucial role in the economic stability and growth of a country.
        </p>
        <p>
            Banks act as intermediaries between those who have surplus funds and those in need of funds, facilitating various financial transactions and services.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Banks are financial institutions that provide services like deposits, loans, and investments.</li>
            <li>Banking is essential for managing personal and business finances efficiently.</li>
        </ul>
    </div>

    <div id="what-is-banking" class="content-box">
        <h3>What is Banking?</h3>
        <p>
            Banking refers to the business conducted by financial institutions that accept deposits, make loans, and provide related services. 
            The primary function of banks is to safeguard money and provide credit to individuals and businesses.
        </p>
        <h3>Examples of Banking Activities:</h3>
        <ul>
            <li>Accepting deposits from customers.</li>
            <li>Providing loans to individuals and businesses.</li>
            <li>Facilitating payment and money transfers.</li>
        </ul>
    </div>

    <div id="types-of-banks" class="content-box">
        <h3>Types of Banks</h3>
        <p>
            There are different types of banks, each serving unique purposes in the financial system. 
            The most common types are:
        </p>
        <ul>
            <li><strong>Commercial Banks:</strong> These are for-profit banks that provide services like accepting deposits and lending money.</li>
            <li><strong>Central Banks:</strong> The main bank of a country, responsible for managing the nation’s money supply and interest rates (e.g., the Federal Reserve).</li>
            <li><strong>Investment Banks:</strong> These specialize in helping businesses raise capital and manage investments.</li>
        </ul>
    </div>

    <div id="importance-of-banking" class="content-box">
        <h3>Importance of Banking</h3>
        <p>
            Banking plays a pivotal role in the development and functioning of a country’s economy. 
            It supports businesses and individuals by providing essential financial services.
        </p>
        <h3>Key Points:</h3>
        <ul>
            <li>Banks provide financial security and facilitate trade by offering loans and credit.</li>
            <li>They act as a bridge between savers and borrowers, ensuring the smooth flow of money in the economy.</li>
        </ul>
    </div>

    <div id="bank-accounts" class="content-box">
        <h2>Bank Accounts</h2>
        <p>
            A bank account is a financial account maintained by a bank or financial institution in which the bank records financial transactions between the customer and the bank.
        </p>
        <h3>Common Types of Bank Accounts:</h3>
        <ul>
            <li><strong>Savings Account:</strong> An account designed for individuals to save money while earning interest on the deposited funds.</li>
            <li><strong>Checking Account:</strong> An account that allows for frequent deposits and withdrawals, primarily used for daily transactions.</li>
            <li><strong>Fixed Deposit:</strong> A savings option that offers a higher interest rate in return for locking in the money for a specified period.</li>
        </ul>
    </div>

    <div id="savings-account" class="content-box">
        <h3>Savings Account</h3>
        <p>
            A savings account allows you to store money safely while earning interest. It's suitable for setting aside money for future needs or goals.
        </p>
        <h3>Key Features:</h3>
        <ul>
            <li>Earns interest on deposits.</li>
            <li>Limited withdrawals each month.</li>
            <li>Low risk and easy access to funds.</li>
        </ul>
    </div>

    <div id="checking-account" class="content-box">
        <h3>Checking Account</h3>
        <p>
            A checking account is designed for frequent transactions, such as paying bills and making purchases. 
            It provides easy access to your money but typically doesn't offer interest.
        </p>
        <h3>Examples of Usage:</h3>
        <ul>
            <li>Using checks or debit cards for daily expenses.</li>
            <li>Paying for groceries or utilities.</li>
        </ul>
    </div>

    <div id="fixed-deposit" class="content-box">
        <h3>Fixed Deposit</h3>
        <p>
            A fixed deposit account allows you to deposit money for a fixed period, earning a higher interest rate than a savings account. 
            However, the money is locked in for the term of the deposit.
        </p>
        <h3>Benefits:</h3>
        <ul>
            <li>Guaranteed return with fixed interest rates.</li>
            <li>Low risk investment option.</li>
        </ul>
    </div>

    <div class="go-back">
        <button onclick="location.href='financeL.php';">Go Back</button>
    </div>
</div>

</body>
</html>
