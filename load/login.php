<?php
session_start();
require 'db.php';

$errors = [];

if (isset($_SESSION['id'])) {
    header("Location: home.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $errors[] = "Email and Password are required.";
    } else {
        $sql = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
        $sql->bind_param("s", $email);
        $sql->execute();
        $sql->store_result();

        if ($sql->num_rows > 0) {
            $sql->bind_result($id, $name, $hashed_password);
            $sql->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;
                if (isset($_SESSION['id'])){
                header("Location: home.php");
                exit();
                }
            } else {
                $errors[] = "Invalid email or password.";
            }
        } else {
            $errors[] = "No user found with that email.";
        }

        $sql->close();
    }
}

$conn->close();
?>
