<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hardcoded admin credentials
    $admin_email = "admin@gmail.com";
    $admin_password = "admin123";

    // Connect to your database
    $conn = new mysqli('localhost', 'root', '', 'employeedb');

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the user is an admin
    if ($email === $admin_email && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        // Check if the user exists in the users table
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verify user credentials
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_logged_in'] = true;
                header("Location: sample.php");
                exit();
            } else {
                header("Location: login-form.php?error=Incorrect password");
                exit();
            }
        } else {
            header("Location: login-form.php?error=Email not found");
            exit();
        }
    }

    // Close the database connection
    $conn->close();
}
?>
