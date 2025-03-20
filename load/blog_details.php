<?php include "load/db.php";

// Fetch the category details
if (!isset($_GET['category_name'])) {
    die("Category name not provided");
    exit();
} else {
    $category_name = $_GET['category_name'];
    // Prepare and execute the SQL query
    $sql = $conn->prepare("SELECT * FROM category WHERE category_name = ?");
    $sql->bind_param("s", $category_name);
    $sql->execute();
    $result = $sql->get_result();
    $row = $result->fetch_assoc();
    // die(var_dump($row));

    if ($row) {
        // Fetch category details
        $category_id = htmlspecialchars($row['id']);
        $category_name = htmlspecialchars($row['category_name']);
        $category_content = htmlspecialchars($row['category_content']);
        $category_image = htmlspecialchars($row['category_image']);
    } else {
        die("Category not found");
        exit();
    }

}

$conn->close();
?>
