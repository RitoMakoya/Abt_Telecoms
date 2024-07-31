<!DOCTYPE html>
<html>
<head>
    <title>Stripe Example</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #ffd700; /* Gold color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            margin: 10px 0;
        }

        button {
            background-color: #007bff; /* Blue color for button */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3; /* Darker blue for hover */
        }
    </style>
</head>
<body>
    <h1>Stripe Example</h1>
    <div class="card">
        <form method="post" action="checkout.php">
            <p>Whatsapp Data</p>
            <p><strong>ZAR200.00</strong></p>
            <button type="submit">Pay</button>
        </form>
    </div>
</body>
</html>
