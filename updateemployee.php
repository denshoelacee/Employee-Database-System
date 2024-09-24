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
        <?php
                include('database.php');
                $sql = "SELECT e.empID, e.firstname,e.middlename,e.lastname,e.barangay,e.municipality,e.city,e.job, e.department, d.deptid, d.deptname  
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
           <p class="text-black p-4">Employee > <a class="text-black"href="updateemployee.php">Add New Employee</a></p>
           <main class="content">
                <div class="container p-3" style=" box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                    <div class="container-fluid " style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                        <p style="margin-top: 20px; margin-left: 20px; font-weight: 900; font-size: 20px;"> Add New Employee </p>
                        <hr style="margin:5px">
                        <form method="POST" action="adddata.php">
                            <div style="display: flex; flex-wrap: wrap; gap: 50px; padding: 20px; justify-content: center;">
                                    <div style="display: flex; flex-direction: row; gap: 20px;">
                                        <label for="firstname">First Name</label>
                                        <input type="text" name="firstname" placeholder="Enter First Name" required>
                                        
                                        <label for="middlename">Middle Name</label>
                                        <input type="text" name="middlename" placeholder="Enter Middle Name" required>
                                        
                                        <label for="lastname">Last Name</label>
                                        <input type="text" name="lastname" placeholder="Enter Last Name" required>
                                    </div>
                            </div>

                            <div style="display: flex; flex-wrap: wrap; gap: 50px; padding: 20px; justify-content: center;">
                                <div style="display: flex; flex-direction: row; gap: 20px;">
                                        <label for="barangay"> Barangay </label>
                                        <input type="text" name="barangay"  placeholder="Enter Barangay">
                            
                                        <label for="municipality"> Municipality </label>
                                        <input type="text" name="municipality"  placeholder="Enter Municipality">
                            
                                        <label for="city"> City </label>
                                        <input type="text" name="city"  placeholder="Enter City">
                                </div>
                            </div>

                            <div style="display: flex; flex-wrap: wrap; gap: 50px; padding: 20px; justify-content: center;">
                                <div style="display: flex; flex-direction: row; gap: 20px;">
                                        <label for="job"> Job </label>
                                        <input type="text" name="job" placeholder="Enter Job"required>
                                    

                                
                                    <label for="department">Choose Department:</label>
                                    <select id="department" name="department" size="1">
                                        <?php echo $options; ?>
                                    </select>
                                </div>
                            </div> 
                            <div class="modal-footer">
                                <button type="submit" name="addemployee" class="mb-4" >Save Data</button>
                            </div>
                        </form>
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