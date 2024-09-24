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
        
<?php include_once('sidebar.php'); ?>
<?php
                include('database.php');
                // get all data from database table name persons
               
                $result = $con->query("SELECT COUNT(*) AS deptID FROM department");
                $row = $result->fetch_assoc();
                $total_department = $row['deptID'];

                $result = $con->query("SELECT COUNT(*) AS adminID FROM admin");
                $row = $result->fetch_assoc();
                $total_admin = $row['adminID'];

                $result = $con->query("SELECT COUNT(*) AS empID FROM employees");
                $row = $result->fetch_assoc();
                $total_employees = $row['empID'];
                ?>
           <p class="text-black p-4">Admin > <a class="text-black"href="dashboard.php">Dashboard</a></p>
           <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3 class="fw-bold fs-4 mb-3">Admin Dashboard</h3>
                        <div class="row" style="display: flex; flex-wrap: wrap; gap: 1rem;">
                            <div class="col-12 col-md-4" style="flex: 1; min-width: 250px;">
                                <div class="card border-2">
                                    <div class="card-body py-4 text-center">
                                        <?php
                                        echo '
                                        <h2 class="mr-3 text-center">Department</h2>
                                        <p class="mr-3 text-center text-black">' . $total_department . '</p>';
                                        ?>
                                        <a href="departments.php">View All</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4" style="flex: 1; min-width: 250px;">
                                <div class="card border-2">
                                    <div class="card-body py-4 text-center">
                                        <?php
                                        echo '
                                        <h2 class="mr-3 text-center">Admin</h2>
                                        <p class="mr-3 text-center text-black">' . $total_admin . '</p>';
                                        ?>
                                        <a href="employee.php">View All</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4" style="flex: 1; min-width: 250px;">
                                <div class="card border-2">
                                    <div class="card-body py-4 text-center">
                                        <?php
                                        echo '
                                        <h2 class="mr-3 text-center">Employees</h2>
                                        <p class="mr-3 text-center text-black">' . $total_employees . '</p>';
                                        ?>
                                        <a href="employee.php">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </main> 
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    
    <script src="script.js"></script>
</body>
</html>