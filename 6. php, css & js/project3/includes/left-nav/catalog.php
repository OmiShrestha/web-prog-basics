<?php
// Catalog page functionality
include '../header.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .catalog-container {
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .catalog-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .item h3 {
            margin: 0 0 10px;
            font-size: 1.2em;
        }
        .item p {
            margin: 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="catalog-container">
        <div class="catalog-header">
            <h1>Catalog</h1>
            <p>Browse available items</p>
        </div>
        <div class="item">
            <h3>Item 1: PHP for Beginners</h3>
            <p>Price: $29.99</p>
        </div>
        <div class="item">
            <h3>Item 2: Advanced JavaScript</h3>
            <p>Price: $39.99</p>
        </div>
        <div class="item">
            <h3>Item 3: HTML & CSS Design</h3>
            <p>Price: $19.99</p>
        </div>
    </div>
</body>
</html>