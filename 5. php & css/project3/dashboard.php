<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<?php include('includes/header.inc.php'); ?>
<main class="container">
    <h1>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
    <p>This is your dashboard. You are logged in.</p>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</main>
<?php include('includes/footer.inc.php'); ?>
