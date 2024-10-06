
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="wrapper">
    
<?php include_once('sidebar.php'); ?>

    <div class="main">
        <p class="text-black p-4">Employee > <a class="text-black" href="employee.php">List of Departments</a></p>
        <main>
            <?php
            include('database.php');

            //PAGINATION
            $limit = 10; // LIMIT PER PAGE
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $offset = ($page - 1) * $limit;

            // GET ALL RECORDS
            $total_result = mysqli_query($con, "SELECT COUNT(*) AS count FROM department");
            $total_row = mysqli_fetch_assoc($total_result);
            $total = $total_row['count'];
            $total_pages = ceil($total / $limit);

            // Fetch the departments for the current page
            $sql = "SELECT *FROM department
                    LIMIT $limit OFFSET $offset";

            $query = mysqli_query($con, $sql);
            ?>
            <div class="container-fluid">
                <div class="container p-4" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                    <h3>Departments</h3>
                    <hr class="p-1">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Department ID</th>
                                    <th>Department Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($index = mysqli_fetch_assoc($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $index['deptID']; ?></td>
                                        <td><?php echo $index['deptname']; ?></td>
                                        <td>
                                            <a href="#editdeptname_<?php echo $index['deptID']; ?>" data-bs-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                            <a href="#deletedeptname_<?php echo $index['deptID']; ?>" data-bs-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                        </td>
                                    </tr>
                                <?php include('modals.php'); } ?>
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item <?php if($page <= 1) echo 'disabled'; ?>">
                                <a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a>
                            </li>
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <li class="page-item <?php if($i === $page) echo 'active'; ?>">
                                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                            <?php endfor; ?>
                            <li class="page-item <?php if($page >= $total_pages) echo 'disabled'; ?>">
                                <a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 39006aeec2c5308060f35a8f587d41ea1d66e019
