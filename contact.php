<?php include "_server/load.php" ?>

<?php
// Check if the user is logged in
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login");
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

    <!-- Contact Content -->
    <?= load("_contact") ?>

    <!-- Footer -->
    <?= load("_footer") ?>

</body>
</html>