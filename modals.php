<!-- VIEW MODAL -->
<div class="modal fade" id="view_<?php echo htmlspecialchars($index['empID']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#0d6efd;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Employee Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
      </div>
      <div class="modal-body">
        <!-- Employee details-->
        <p>Employee ID: <?php echo htmlspecialchars($index['empID']); ?></p>
        <p>Name: <?php echo htmlspecialchars($index['firstname']).' '.($index['middlename']) .' '.($index['lastname']); ?></p>
        <p>Address: <?php echo htmlspecialchars($index['barangay']).' '.($index['municipality']) .' '.($index['city']); ?></p>
        <p>Job: <?php echo htmlspecialchars($index['job']); ?></p>
        <p>Department: <?php echo htmlspecialchars($index['department']); ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- EDIT MODAL -->
<div class="modal fade" id="edit_<?php echo htmlspecialchars($index['empID']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"style="background-color:#0d6efd;">
                <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Employee Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <!-- Employee details-->
                    <form action="adddata.php" method="POST">
                        <div class="modal-body">
                                <div class="form-group">
                                    <label class="text"> Employee ID </label>
                                    <input type="text" class="form-control" name="empID"readonly required value="<?php echo $index['empID']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="text"> First Name </label>
                                    <input type="text" class="form-control" name="firstname"required value="<?php echo $index['firstname']; ?>">
                                </div>

                                <div class="form-group">
                                    <label> Middle Name </label>
                                    <input type="text" class="form-control" name="middlename"required value="<?php echo $index['middlename']; ?>">
                                </div>  

                                <div class="form-group">
                                    <label> Last Name </label>
                                    <input type="text" class="form-control" name="lastname"required value="<?php echo $index['lastname']; ?>">
                                </div>

                                <div class="form-group">
                                    <label> Barangay </label>
                                    <input type="text" class="form-control" name="barangay" value="<?php echo $index['barangay']; ?>">
                                </div>

                                <div class="form-group">
                                    <label> Municipality </label>
                                    <input type="text" class="form-control" name="municipality"value="<?php echo $index['municipality']; ?>">
                                </div>

                                <div class="form-group">
                                    <label> City </label>
                                    <input type="text" class="form-control" name="city" value="<?php echo $index['city']; ?>">
                                </div>

                                <div class="form-group">
                                    <label> Job </label>
                                    <input type="text" class="form-control" name="job"required value="<?php echo $index['job']; ?>">
                                </div>

                                <div class="form-group">
                                    <br>    
                                <label>Choose Department:</label>
                                <select id="department" name="department" size="1   ">
                                    <?php echo $options; ?>
                                </select>
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="editemployee" class="btn btn-primary">Update Data</button>
                        </div>
                    </form> 
                </div>
        </div>
    </div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="delete_<?php echo htmlspecialchars($index['empID']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"style="background-color:#0d6efd;">
                <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Delete Employee Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Employee details -->
                <form action="adddata.php" method="GET">
                    <input type="hidden" name="delete_id" value="<?php echo htmlspecialchars($index['empID']); ?>">
                    <h5>Do you want to Delete this Employee Data?</h5>
                    <br>
                    <h3><?php echo htmlspecialchars( $index['firstname'] .' '.$index['middlename'] .' '. $index['lastname']); ?></h3>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="deleteemployee" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






<!-- EDIT DEPARTMENT MODAL -->
<div class="modal fade" id="editdeptname_<?php echo htmlspecialchars($index['deptID']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"style="background-color:#0d6efd;">
                <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Department Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <!-- Employee details-->
                    <form action="adddata.php" method="POST">
                        <div class="modal-body">
                                <div class="form-group">
                                    <label class="text"> Departmen ID </label>
                                    <input type="text" class="form-control" name="deptID"readonly required value="<?php echo $index['deptID']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Department Name </label>
                                    <input type="text" class="form-control" name="departmentname"required value="<?php echo $index['deptname']; ?>">
                        </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="editdepartment" class="btn btn-primary">Update Data</button>
                        </div>
                    </form> 
                </div>
        </div>
    </div>
</div>



<!-- DELETE DEPARTMENT MODAL -->
<div class="modal fade" id="deletedeptname_<?php echo htmlspecialchars($index['deptID']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"style="background-color:#0d6efd;">
                <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Delete Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Employee details -->
                <form action="adddata.php" method="GET">
                    <input type="hidden" name="delete_deptid" value="<?php echo htmlspecialchars($index['deptID']); ?>">
                    <h5>Do you want to Delete this Department ?</h5>
                    <br>
                    <h3><?php echo htmlspecialchars( $index['deptname']); ?></h3>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="deletedepartment" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


