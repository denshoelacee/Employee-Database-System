<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- ICONS -->
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="wrapper">
<<<<<<< HEAD
<?php 
include_once('database.php'); // Correctly include the database connection
include_once('sidebar.php'); 
?>
    <div class="container-fluid">
    <p class="text-black p-4"> > <a class="text-black" href="employee.php">Profile</a></p>
        <div class="container p-4  " style=" box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
            <h2> User </h2>

            <?php
            // Fetch users from the database
            $query = "SELECT * FROM users";
            $result = $con->query($query); // Use $con instead of $conn

            if ($result->num_rows > 0) {
                // Display each user in a card
                while ($user = $result->fetch_assoc()) {
                    echo '<div class="card mb-3 flex-col" style="width: 18rem;">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">User ID: ' . $user['userID'] . '</h5>';
                    echo '<p class="card-text">Email: ' . $user['email'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No users found.</p>';
            }

            // Close the database connection
            $con->close(); // Use $con instead of $conn
            ?>
=======
<?php include_once('sidebar.php'); ?>
    <div class="container-fluid">
    <p class="text-black p-4"> > <a class="text-black"href="employee.php">Profile</a></p>
        <div class="container p-4" style=" box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
            <h2> User </h2>
>>>>>>> 39006aeec2c5308060f35a8f587d41ea1d66e019
        </div>  
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        
    <script src="script.js"></script>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 39006aeec2c5308060f35a8f587d41ea1d66e019
