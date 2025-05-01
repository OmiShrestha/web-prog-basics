<?php
// Tasks page functionality
include '../header.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .tasks-container {
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .tasks-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .task {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .task h3 {
            margin: 0 0 10px;
            font-size: 1.2em;
        }
        .task p {
            margin: 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="tasks-container">
        <div class="tasks-header">
            <h1>Your Tasks</h1>
            <p>Manage your tasks efficiently</p>
        </div>
        <div class="task">
            <h3>Task 1: Complete the report</h3>
            <p>Deadline: April 25, 2025</p>
        </div>
        <div class="task">
            <h3>Task 2: Prepare for the presentation</h3>
            <p>Deadline: April 28, 2025</p>
        </div>
        <div class="task">
            <h3>Task 3: Update the project plan</h3>
            <p>Deadline: May 1, 2025</p>
        </div>
    </div>
</body>
</html>