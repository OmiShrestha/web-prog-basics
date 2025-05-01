<?php
// Configure page functionality
include '../header.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configure</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .configure-container {
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .configure-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .setting {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .setting h3 {
            margin: 0 0 10px;
            font-size: 1.2em;
        }
        .setting p {
            margin: 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="configure-container">
        <div class="configure-header">
            <h1>Configuration Settings</h1>
            <p>Adjust your preferences</p>
        </div>
        <div class="setting">
            <h3>Notification Settings</h3>
            <p>Enable or disable notifications</p>
        </div>
        <div class="setting">
            <h3>Privacy Settings</h3>
            <p>Manage your privacy preferences</p>
        </div>
        <div class="setting">
            <h3>Account Settings</h3>
            <p>Update your account information</p>
        </div>
    </div>
</body>
</html>