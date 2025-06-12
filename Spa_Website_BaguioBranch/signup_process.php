<?php
session_start();

require_once "config/connection.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username  = $_POST['username'];
    $email     = $_POST['email'];   
    $password  = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO user_info ( name, username, email, password) VALUES (?, ?, ?, ?)");
    $adminStmt = $conn_admin->prepare("INSERT INTO user_info ( name, username, email, password) VALUES (?, ?, ?, ?)");
    

    $stmt->bind_param("ssss", $name, $username, $email, $password);
    $adminStmt->bind_param("ssss",$name, $username, $email, $password);

    if ($stmt->execute() && $adminStmt->execute()) {
        header("Location: login.php?signup=success");
    } else {
        header("Location: signup.php?error=exists");
    }

    $stmt->close();
    $conn->close();
    exit();
}
?>
