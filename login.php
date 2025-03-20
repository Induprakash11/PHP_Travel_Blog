<?php include "_server/load.php"; ?>
<?php include "load/load.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head Content -->
    <?= load("_head") ?>

    <!-- Redirect JS -->
    <script>
        function checkLoginStatus() {
            fetch("load/session_check.php")
                .then(response => response.text())
                .then(data => {
                    if (data === "logged_in") {
                        window.location.href = "home.php"; // Redirect to home.php
                    }
                });
        }

        checkLoginStatus(); // Run on page load
    </script>
</head>

<body>
    <!-- Navbar -->
    <?= load("_navbar") ?>

    <!-- Login Content -->
    <?= load("_login") ?>

    <!-- Footer -->
    <?= load("_footer") ?>

</body>

</html>