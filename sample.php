<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="wrapper">
    <div class="container-fluid">
        <p class="text-black p-4">Profile > Update Profile</p>
        <div class="container p-4" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
            <h2>Update Profile</h2>
            <form method="POST" action="updateprofile.php">
                <div class="mb-3">
                    <label for="empID" class="form-label">Enter Your ID Number</label>
                    <input type="text" class="form-control" name="empID" required>
                </div>
                <button type="submit" name="fetchProfile" class="btn btn-primary">Fetch Profile</button>
            </form>

            <?php
            include('database.php');

            if (isset($_POST['fetchProfile'])) {
                $empID = $_POST['empID'];
                $sql = "SELECT * FROM employees WHERE empID = ?";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("i", $empID);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $employee = $result->fetch_assoc();
                    ?>
                    <form method="POST" action="updateprofile.php">
                        <input type="hidden" name="empID" value="<?php echo htmlspecialchars($employee['empID']); ?>">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstname" value="<?php echo htmlspecialchars($employee['firstname']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="middlename" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="middlename" value="<?php echo htmlspecialchars($employee['middlename']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastname" value="<?php echo htmlspecialchars($employee['lastname']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="barangay" class="form-label">Barangay</label>
                            <input type="text" class="form-control" name="barangay" value="<?php echo htmlspecialchars($employee['barangay']); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="municipality" class="form-label">Municipality</label>
                            <input type="text" class="form-control" name="municipality" value="<?php echo htmlspecialchars($employee['municipality']); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" value="<?php echo htmlspecialchars($employee['city']); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="job" class="form-label">Job</label>
                            <input type="text" class="form-control" name="job" value="<?php echo htmlspecialchars($employee['job']); ?>" required>
                        </div>
                        <button type="submit" name="updateprofile" class="btn btn-success">Update Profile</button>
                    </form>
                    <?php
                } else {
                    echo "<p class='text-danger'>No employee found with this ID.</p>";
                }
            }

            // Update profile logic
            if (isset($_POST['updateprofile'])) {
                $empID = $_POST['empID'];
                $firstname = $_POST['firstname'];
                $middlename = $_POST['middlename'];
                $lastname = $_POST['lastname'];
                $barangay = $_POST['barangay'];
                $municipality = $_POST['municipality'];
                $city = $_POST['city'];
                $job = $_POST['job'];

                $sql = "UPDATE employees SET firstname=?, middlename=?, lastname=?, barangay=?, municipality=?, city=?, job=? WHERE empID=?";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("sssssisi", $firstname, $middlename, $lastname, $barangay, $municipality, $city, $job, $empID);
                if ($stmt->execute()) {
                    echo "<p class='text-success'>Profile updated successfully!</p>";
                } else {
                    echo "<p class='text-danger'>Error updating profile.</p>";
                }
            }
            ?>
        </div>  
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    
<script src="script.js"></script>
</body>
</html>
