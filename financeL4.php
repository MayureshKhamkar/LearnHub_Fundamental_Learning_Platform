<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons Dashboard - Budgeting and Saving Techniques</title>
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
            <li><a href="#intro-to-budgeting">Introduction to Budgeting & Saving</a></li>
            <ul>
                <li><a href="#budgeting-methods">Budgeting Methods</a></li>
                <li><a href="#saving-strategies">Saving Strategies</a></li>
                <li><a href="#debt-management">Debt Management Techniques</a></li>
            </ul>
        </ul>
        <div class="go-back">
            <a href="FinanceL.php">Go Back</a>
        </div>
    </div>
</div>

<div class="content-container">
    <div id="intro-to-budgeting" class="content-box">
        <h2>Introduction to Budgeting & Saving Techniques</h2>
        <p>
            Budgeting and saving are essential financial practices that help individuals manage their money, plan for future expenses, and build a secure financial future.
        </p>
        <p>
            By following a budget, you can track your income and expenses to make better financial decisions. Saving techniques, on the other hand, ensure you set aside money for emergencies, large purchases, or future financial goals.
        </p>
        <h3>Key Areas Covered:</h3>
        <ul>
            <li><strong>Budgeting Methods:</strong> Different approaches to managing and allocating your income.</li>
            <li><strong>Saving Strategies:</strong> Techniques to build savings and grow your financial security.</li>
            <li><strong>Debt Management:</strong> Strategies to efficiently manage and reduce debt while maintaining financial stability.</li>
        </ul>
    </div>

    <div id="budgeting-methods" class="content-box">
        <h3>Budgeting Methods</h3>
        <p>
            A budget is a financial plan that allocates your income to various expenses and saving goals. There are several budgeting methods you can use, depending on your financial needs and lifestyle.
        </p>
        <h3>Popular Budgeting Methods:</h3>
        <ul>
            <li><strong>50/30/20 Rule:</strong> Allocate 50% of your income to needs, 30% to wants, and 20% to savings or debt repayment.</li>
            <li><strong>Zero-Based Budgeting:</strong> Every dollar is allocated to a specific purpose, leaving no unassigned money at the end of the month.</li>
            <li><strong>Envelope Method:</strong> Physically set aside cash for each category of expenses, such as groceries, rent, and entertainment, in separate envelopes.</li>
        </ul>
    </div>

    <div id="saving-strategies" class="content-box">
        <h3>Saving Strategies</h3>
        <p>
            Saving money helps you prepare for unexpected expenses, future purchases, and retirement. Implementing effective saving techniques ensures financial security and the ability to meet financial goals.
        </p>
        <h3>Common Saving Strategies:</h3>
        <ul>
            <li><strong>Pay Yourself First:</strong> Set aside a portion of your income for savings before allocating funds to other expenses.</li>
            <li><strong>Automatic Savings:</strong> Set up automatic transfers from your checking account to your savings account each month.</li>
            <li><strong>Emergency Fund:</strong> Build a fund that can cover 3-6 months of living expenses in case of financial emergencies.</li>
        </ul>
    </div>

    <div id="debt-management" class="content-box">
        <h3>Debt Management Techniques</h3>
        <p>
            Debt management involves creating a plan to pay off debts and reduce liabilities while maintaining financial stability. Effective debt management helps minimize interest payments and improve credit scores.
        </p>
        <h3>Effective Debt Management Strategies:</h3>
        <ul>
            <li><strong>Debt Snowball Method:</strong> Pay off smaller debts first, then roll the payments into larger debts as you go.</li>
            <li><strong>Debt Avalanche Method:</strong> Prioritize paying off debts with the highest interest rates to minimize total interest paid.</li>
            <li><strong>Consolidation:</strong> Combine multiple debts into one loan with a lower interest rate to simplify repayment.</li>
        </ul>
    </div>

</div>

</body>
</html>
