<?php
session_start();
include('database.php');
//ADD EMPLOYEE
if(isset($_POST['addemployee'])){
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $barangay = $_POST['barangay'];
    $municipality = $_POST['municipality'];
    $city = $_POST['city'];
    $job = $_POST['job'];
    $department = $_POST['department'];

        // Insert the new contact with fullname
        $sql = "INSERT INTO employees (firstname, middlename, lastname, barangay, municipality,city, job,department) 
                            VALUES ('$firstname','$middlename' ,'$lastname','$barangay', '$municipality', '$city', '$job' , '$department')";
        
        if(mysqli_query($con, $sql)){
            $_SESSION['message'] = "Employee added successfully!";
        } else {
            $_SESSION['message'] = "Something went wrong while adding contact: " . mysqli_error($con);
        }
        header('location:editdeleteemployee.php');
    }     

//EDIT EMPLOYEE
if(isset($_POST['editemployee'])){
    $id = $_POST['empID'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $barangay = $_POST['barangay'];
    $municipality = $_POST['municipality'];
    $city = $_POST['city'];
    $job = $_POST['job'];
    $department = $_POST['department'];

    $sql = "UPDATE employees SET firstname='$firstname', middlename='$middlename',lastname ='$lastname', barangay='$barangay'
    ,municipality = '$municipality', city = '$city', job= '$job',department= '$department' WHERE empID='$id'";

    if(mysqli_query($con, $sql)){
            $_SESSION['message'] = "Employee added successfully!";
        } else {
            $_SESSION['message'] = "Something went wrong while adding contact: " . mysqli_error($con);
        }
        header('location:editdeleteemployee.php');
}  
    
    
//DELETE EMPLOYEE
if(isset($_GET['deleteemployee'])) {
    // get id to delete from database
    $id = $_GET['delete_id'];

    // delete user from database
    $sql = "DELETE FROM employees WHERE empID='$id'";
    
    if(mysqli_query($con, $sql)){
        $_SESSION['message'] = "Employee added successfully!";
    } else {
        $_SESSION['message'] = "Something went wrong while adding contact: " . mysqli_error($con);
    }

    // after deleting the user from the database, return to table
    header('location: editdeleteemployee.php');
}


//EDIT DEPARTMENT
if(isset($_POST['editdepartment'])){
    $id = $_POST['deptID'];
    $departmentname = $_POST['departmentname'];
    
    $sql = "UPDATE department SET deptname='$departmentname' WHERE deptID='$id'";

    if(mysqli_query($con, $sql)){
            $_SESSION['message'] = "Department updated successfully!";
        } else {
            $_SESSION['message'] = "Something went wrong while updating the department: " . mysqli_error($con);
        }
        header('location:departments.php');
}  


//ADD DEPARTMENT
if(isset($_POST['adddepartment'])){
    $departmentname = $_POST['departmentname'];
        // Insert the new department
        $sql = "INSERT INTO department (deptname) 
                            VALUES ('$departmentname')";
        
        if(mysqli_query($con, $sql)){
            $_SESSION['message'] = "Department added successfully!";
        } else {
            $_SESSION['message'] = "Something went wrong while adding department: " . mysqli_error($con);
        }
        header('location:departments.php');
    }     


//DELETE DEPARTMENT
if(isset($_GET['deletedepartment'])) {
    // get id to delete from database
    $id = $_GET['delete_deptid'];

    // delete user from database
    $sql = "DELETE FROM department WHERE deptID='$id'";
    
    if(mysqli_query($con, $sql)){
        $_SESSION['message'] = "Employee added successfully!";
    } else {
        $_SESSION['message'] = "Something went wrong while adding contact: " . mysqli_error($con);
    }

    // after deleting the user from the database, return to index.php
    header('location: departments.php');
}

?>




