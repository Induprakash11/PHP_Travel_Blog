<?php include "_server/load.php"; ?>

<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- dashboard -->
    <?= load("_head") ?>
</head>
<body>
    <!-- Navbar -->
    <?= load("_navbar") ?>

    <div class="container text-center" style="min-height: 503px; align-items: center; display: flex; justify-content: center; flex-direction: column;">
    <h2>Welcome, <?php echo $_SESSION['name']; ?>!</h2>
    <p>This is your dashboard.</p>
    <a href="logout.php">Logout</a>
    </div>

    <!-- Footer -->
    <?= load("_footer")?>

</body>
</html>
