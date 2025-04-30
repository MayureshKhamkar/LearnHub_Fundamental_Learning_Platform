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
            <li><a href="#intro-to-finance">Introduction to Financial Products & Services</a></li>
            <ul>
                <li><a href="#savings-products">Savings Products</a></li>
                <li><a href="#investment-products">Investment Products</a></li>
                <li><a href="#loan-products">Loan Products</a></li>
                <li><a href="#insurance-products">Insurance Products</a></li>
            </ul>
        </ul>
        <div class="go-back">
            <a href="financeL.php">Go Back</a>
        </div>
    </div>
</div>

<div class="content-container">
    <div id="intro-to-finance" class="content-box">
        <h2>Introduction to Financial Products & Services</h2>
        <p>
            Financial products and services include a wide range of offerings provided by financial institutions to manage and grow your wealth, protect against risks, and provide financial support.
        </p>
        <p>
            These offerings can be broadly categorized into savings, investments, loans, and insurance. Each of these categories helps individuals and businesses manage their finances according to their needs and goals.
        </p>
        <h3>Key Categories:</h3>
        <ul>
            <li><strong>Savings Products:</strong> Help individuals save and grow their money with interest or returns.</li>
            <li><strong>Investment Products:</strong> Provide opportunities to grow wealth by investing in stocks, bonds, and mutual funds.</li>
            <li><strong>Loan Products:</strong> Offer financial support by lending money that is repaid with interest.</li>
            <li><strong>Insurance Products:</strong> Protect against financial loss from risks such as accidents, illness, or death.</li>
        </ul>
    </div>

    <div id="savings-products" class="content-box">
        <h3>Savings Products</h3>
        <p>
            Savings products are designed to help individuals and businesses accumulate and grow their savings safely, usually by earning interest on the deposited funds.
        </p>
        <h3>Examples of Savings Products:</h3>
        <ul>
            <li><strong>Savings Account:</strong> A deposit account that offers a low but steady interest rate on the deposited funds.</li>
            <li><strong>Fixed Deposit:</strong> A higher interest-earning product where the money is locked in for a specified period.</li>
        </ul>
    </div>

    <div id="investment-products" class="content-box">
        <h3>Investment Products</h3>
        <p>
            Investment products allow individuals to put their money into financial markets with the goal of growing their wealth over time. 
            These products come with varying degrees of risk and potential returns.
        </p>
        <h3>Examples of Investment Products:</h3>
        <ul>
            <li><strong>Stocks:</strong> Buying shares in a company, giving partial ownership and a chance to profit from the company’s success.</li>
            <li><strong>Bonds:</strong> Lending money to a government or corporation in exchange for periodic interest payments and the return of the principal amount at maturity.</li>
            <li><strong>Mutual Funds:</strong> Pooling money with other investors to invest in a diversified portfolio managed by professionals.</li>
        </ul>
    </div>

    <div id="loan-products" class="content-box">
        <h3>Loan Products</h3>
        <p>
            Loan products are financial services that provide borrowers with access to funds, which are repaid with interest over time.
        </p>
        <h3>Examples of Loan Products:</h3>
        <ul>
            <li><strong>Personal Loan:</strong> A loan used for personal expenses, repaid with interest over a fixed term.</li>
            <li><strong>Home Loan:</strong> A loan used to purchase a house or property, usually with a long repayment period.</li>
            <li><strong>Auto Loan:</strong> A loan specifically for purchasing a vehicle.</li>
        </ul>
    </div>

    <div id="insurance-products" class="content-box">
        <h3>Insurance Products</h3>
        <p>
            Insurance products provide financial protection against unforeseen risks and events, helping to mitigate financial losses due to accidents, illness, death, or damage.
        </p>
        <h3>Examples of Insurance Products:</h3>
        <ul>
            <li><strong>Health Insurance:</strong> Provides coverage for medical expenses arising from illness or injury.</li>
            <li><strong>Life Insurance:</strong> Offers financial support to your beneficiaries in the event of your death.</li>
            <li><strong>Auto Insurance:</strong> Covers damages and liabilities related to vehicle accidents.</li>
        </ul>
    </div>

</div>

</body>
</html>
