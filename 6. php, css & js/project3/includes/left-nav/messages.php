<?php
// Messages page functionality
include '../header.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .messages-container {
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .messages-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .message {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .message h3 {
            margin: 0 0 10px;
            font-size: 1.2em;
        }
        .message p {
            margin: 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="messages-container">
        <div class="messages-header">
            <h1>Your Messages</h1>
            <p>Stay updated with the latest messages</p>
        </div>
        <div class="message">
            <h3>Message from John Doe</h3>
            <p>Hello! Just wanted to check in on the project status.</p>
        </div>
        <div class="message">
            <h3>Message from Jane Smith</h3>
            <p>Don't forget about the meeting tomorrow at 10 AM.</p>
        </div>
        <div class="message">
            <h3>Message from Alice Johnson</h3>
            <p>Can you review the latest draft I sent over?</p>
        </div>
    </div>
</body>
</html>