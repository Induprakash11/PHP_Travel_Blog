<?php 
// Include necessary files
include "_server/load.php";
include "load/blog.php";

// Start session and check if the user is logged in
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Load head content -->
    <?= load("_head") ?>
</head>
<body>
    <!-- Load navbar -->
    <?= load("_navbar") ?>

    <!-- Load blog content -->
    <?= load("_blog") ?>

    <!-- Load footer -->
    <?= load("_footer") ?>
</body>
</html>