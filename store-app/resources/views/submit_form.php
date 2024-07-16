<?php

// Connect to SQLite database (or create it if it doesn't exist)
$db = new PDO('sqlite:database.db');

// Create users table if it doesn't exist
$db->exec("CREATE TABLE IF NOT EXISTS users (
    email TEXT NOT NULL, 
    password TEXT NOT NULL,
)");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        exit;
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert form data into the database
    $stmt = $db->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);

    if ($stmt->execute()) {
        echo "Sign up successful!";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
?>
