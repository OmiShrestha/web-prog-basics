<?php
// Logout functionality
session_start();
session_destroy();
echo "You have been logged out. Redirecting to the login page...";
header("Refresh: 2; url=../chapter12-project3.php");
exit;
?>