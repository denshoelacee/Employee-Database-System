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
           <p class="text-black p-4">Department > <a class="text-black"href="updateemployee.php">Add New Department</a></p>
           <main class="content">
                <div class="container p-3" style=" box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                    <div class="container-fluid " style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                        <p style="margin-top: 20px; margin-left: 20px; font-weight: 900; font-size: 20px;"> Add New Department </p>
                        <hr style="margin:5px">
                        <form method="POST" action="adddata.php">
                            <div style="display: flex; flex-wrap: wrap; gap: 50px; padding: 20px; justify-content: center;">
                                    <div>
                                        <label for="departmentname" id="label-title"> Department Name </label>
                                        <input type="text" name="departmentname" placeholder="  Enter Department Name"required style="padding: 5px; margin-top:25px;">
                                    </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" name="adddepartment" class="mb-4" >Save Data</button>
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