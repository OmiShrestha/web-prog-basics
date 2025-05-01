<?php
// Dashboard page functionality
include '../header.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .dashboard-container {
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .dashboard-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .dashboard-widgets {
            display: flex;
            justify-content: space-around;
            margin-bottom: 30px;
        }
        .widget {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            width: 30%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .widget h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .widget p {
            font-size: 1.2em;
            color: #333;
        }
        .recent-activity {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .recent-activity h2 {
            font-size: 1.5em;
            margin-bottom: 15px;
        }
        .recent-activity ul {
            list-style: none;
            padding: 0;
        }
        .recent-activity ul li {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        .recent-activity ul li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h1>Welcome to the Dashboard</h1>
            <p>Your one-stop overview of all activities</p>
        </div>
        <div class="dashboard-widgets">
            <div class="widget">
                <h2>Total Customers</h2>
                <p>120</p>
            </div>
            <div class="widget">
                <h2>Total Orders</h2>
                <p>450</p>
            </div>
            <div class="widget">
                <h2>Total Books</h2>
                <p>300</p>
            </div>
        </div>
        <div class="recent-activity">
            <h2>Recent Activity</h2>
            <ul>
                <li>Order #1234 placed by John Doe</li>
                <li>New customer Jane Smith registered</li>
                <li>Book "PHP for Beginners" added to catalog</li>
                <li>Order #1235 placed by Alice Johnson</li>
                <li>Customer Bob Brown updated profile</li>
            </ul>
        </div>
    </div>
</body>
</html>