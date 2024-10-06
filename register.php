<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Connect to your database
    $conn = new mysqli('localhost', 'root', '', 'employeedb');

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if email is already registered
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header("Location: login-form.php?error=Email already registered. Please log in.");
        exit();
    } else {
        // Insert user data into the database
        $sql = "INSERT INTO users (name, email, password) VALUES (?,?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss',$name, $email, $hashed_password);
        
        if ($stmt->execute()) {
            // Redirect to a success page or login
            header("Location: login-form.php?success=Registration successful. Please log in.");
            exit();
        } else {
            // Handle error during insertion
            header("Location: register.php?error=Error during registration.");
            exit();
        }
    }

    // Close the statement
    $stmt->close();
    
    // Close the database connection
    $conn->close();
}
?>
