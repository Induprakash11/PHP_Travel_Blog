<?php 
// Include database connection
require "load/db.php"; 

// Prepare and execute the SQL query to fetch blog categories
$sql = $conn->prepare("SELECT * FROM category ORDER BY id DESC");
if (!$sql) {
    die("Error preparing SQL statement: " . $conn->error);
}

$sql->execute();
$result = $sql->get_result();
if (!$result) {
    die("Error fetching blog categories: " . $conn->error);
}

// Close the database connection
$conn->close();
?>