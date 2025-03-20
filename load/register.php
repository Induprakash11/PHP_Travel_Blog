<?php
require 'db.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    
    // Validation

    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Check if email already exists
    
    $check_email = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check_email->bind_param("s", $email);
    $check_email->execute();
    $check_email->store_result();

    if ($check_email->num_rows > 0) {
        $errors[] = "Email is already registered.";
    }
    $check_email->close();


    // If no errors, insert user into database
    
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $name, $email, $hashed_password);

        if ($sql->execute()) {
            echo "Registration successful! You can now log in.";
            header("Location: login.php");
            exit();
        } else {
            $errors[] = "Error: " . $sql->error;
        }
        $sql->close();
    }
    $conn->close();
}
?>