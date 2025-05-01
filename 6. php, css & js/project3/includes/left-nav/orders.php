<?php
// Orders page functionality
include '../header.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .orders-container {
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .orders-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .order {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .order h3 {
            margin: 0 0 10px;
            font-size: 1.2em;
        }
        .order p {
            margin: 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="orders-container">
        <div class="orders-header">
            <h1>Your Orders</h1>
            <p>Track and manage your orders</p>
        </div>
        <div class="order">
            <h3>Order #1234</h3>
            <p>Status: Shipped</p>
        </div>
        <div class="order">
            <h3>Order #1235</h3>
            <p>Status: Processing</p>
        </div>
        <div class="order">
            <h3>Order #1236</h3>
            <p>Status: Delivered</p>
        </div>
    </div>
</body>
</html>