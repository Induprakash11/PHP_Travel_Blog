<?php include "_server/load.php"; ?>

<?php
// Check if the user is logged in
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head Content -->
    <?= load("_head") ?>
</head>
<body>
    <!-- Navbar -->
    <?= load("_navbar") ?>

    <!-- Hero Content -->
    <?= load("_hero") ?>

    <!-- Blog Content -->
    <?= load("_blog") ?>

    <!-- Footer -->
    <?= load("_footer") ?>

</body>
</html>