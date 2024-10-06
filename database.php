<?php
$servername = "localhost"; //server name
$username = "root"; //username
$password = ""; //password
$databasename = "employeedb";  //database name

// connection string para database
$con = new mysqli($servername, $username, $password, $databasename);

// check if nag connect naba sa database
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
<<<<<<< HEAD
?>
=======
?>




>>>>>>> 39006aeec2c5308060f35a8f587d41ea1d66e019
