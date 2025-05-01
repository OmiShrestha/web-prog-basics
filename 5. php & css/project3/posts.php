<?php 
include('header.inc.php');
include('travel-data.inc.php'); 

function outputPostRowSimple($num) {
    global ${"title$num"}, ${"excerpt$num"};
    echo "<h3>" . ${"title$num"} . "</h3>";
    echo "<p>" . ${"excerpt$num"} . "</p><hr/>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Browse Posts</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    <main class="container">
        <h1>Posts</h1>
        <?php 
            outputPostRowSimple(1);
            outputPostRowSimple(2);
            outputPostRowSimple(3);
        ?>
    </main>
</body>
</html>
