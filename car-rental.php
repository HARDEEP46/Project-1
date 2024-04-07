<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Our Vintage Cars</title>
    <link rel="icon" href="images/Log.png" type="image/x-icon">

    <script src="script.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .car-selection,
        .duration-selection {
            margin-bottom: 20px;
        }

        label {
            display: block;
            color: #555;
            margin-bottom: 5px;
        }

        select,
        input {
            padding: 10px;
            width: calc(100% - 20px);
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .total-price {
            margin-top: 20px;
        }

        h2 {
            color: #333;
        }

        #priceDisplay {
            font-size: 24px;
            color: #007bff;
        }

        button {
            padding: 10px 20px;
            background-color: red;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<?php
include('includes/global-nav.php');
?>
<body>

    <div class="container">
        <h1>Vintage Car Rental</h1>

        <div class="car-selection">
            <label for="carSelect">Select a Vintage Car:</label>
            <select id="carSelect">
                <option value="0">Choose a car...</option>
                <option value="100">1950 Cadillac DeVille</option>
                <option value="150">1965 Ford Mustang</option>
                <option value="200">1969 Chevrolet Camaro</option>
            </select>
        </div>

        <div class="duration-selection">
            <label for="durationSelect">Select Rental Duration (in days):</label>
            <input type="number" id="durationSelect" min="1" value="1">
        </div>

        <div class="total-price">
            <h2>Total Rental Price:</h2>
            <p id="priceDisplay">$0</p>
        </div>

        <button onclick="calculateTotalPrice()">Calculate Total Price</button>
    </div>

<?php
include('includes/footer-nav.php');
?>
</body>

</html>