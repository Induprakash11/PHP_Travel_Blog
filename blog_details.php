<?php include "_server/load.php" ?>

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

    <!-- Blog Details -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-details">
                    <h1 class="blog-title">Blog Title</h1>
                    <p class="blog-date">Posted on: <span>01/01/2022</span></p>
                    <div class="blog-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in velit lectus. Donec malesuada, mauris id varius bibendum, justo nisi pellentesque neque, vel efficitur orci velit non neque. Donec consectetur, libero vel gravida tincidunt, velit lectus semper tellus, non tincidunt odio neque in velit. Sed in velit lectus. Donec malesuada, mauris id varius bibendum, justo nisi pellentesque neque, vel efficitur orci velit non neque.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-sidebar">
                    <h3>Recent Posts</h3>
                    <ul>
                        <li><a href="#">Post 1</a></li>
                        <li><a href="#">Post 2</a></li>
                        <li><a href="#">Post 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?= load("_footer") ?>
</body>
</html>