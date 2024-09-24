<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    
</head>

<body>
<div class="wrapper">
<?php include_once('sidebar.php'); ?>

        <div class="main">
            <p class="text-black p-4">Employee > <a class="text-black"href="employee.php">Edit and Delete Employee</a></p>
                <main>
                    <?php
                        
                        include('database.php');    
                        $sql = "SELECT e.empID, e.firstname,e.middlename,e.lastname,e.barangay,e.municipality,e.city,e.job, e.department, d.deptID,d.deptname
                        FROM employees e 
                        INNER JOIN department d
                        ON e.department = d.deptname;  
                        ";  
                        $query = mysqli_query($con, $sql);  

                        $sql = "SELECT deptname FROM department";
                        $result = $con->query($sql);

                        // Checker if department exists
                        if ($result->num_rows > 0) {
                            //Generates all the Options into form by using a $option variable 
                            $options = '';
                            while ($row = $result->fetch_assoc()) {
                                $options .= '<option value="' . htmlspecialchars($row['deptname']) . '">' . htmlspecialchars($row['deptname']) . '</option>';
                            }
                        } else {
                            $options = '<option>No departments available</option>';
                        }
            
                    ?>
                    <div class="container-fluid">
                        <div class="container p-4" style=" box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                        <h3>Employees</h3>
                        <hr class ="p-1">
                                <div class="row">
                                        <table class="table">
                                            <thead>
                                                <th> ID</th>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>Last Name</th>
                                                <th>Barangay</th>
                                                <th>Municipality</th>
                                                <th>City</th>
                                                <th>Job</th>
                                                <th>Department<th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    while ($index = mysqli_fetch_assoc($query)) {   
                                                ?>                                                    
                                                <tr>
                                                    <td><?php echo $index['empID']; ?></td>
                                                    <td><?php echo $index['firstname']; ?></td>
                                                    <td><?php echo $index['middlename']; ?></td>
                                                    <td><?php echo $index['lastname']; ?></td>
                                                    <td><?php echo $index['barangay']; ?></td>
                                                    <td><?php echo $index['municipality']; ?></td>
                                                    <td><?php echo $index['city']; ?></td>
                                                    <td><?php echo $index['job']; ?></td>
                                                    <td><?php echo $index['department']; ?></td>
                                                    <td>
                                                    <a href="#edit_<?php echo $index['empID']; ?>" data-bs-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                                    <a href="#delete_<?php echo $index['empID']; ?>" data-bs-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>

                                                    </td>
                                                    <?php include('modals.php'); ?>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
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