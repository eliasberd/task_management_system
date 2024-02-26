<?php 

include("../include/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>   
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Task Management System</title>
</head>
<body>
    <div class = "main-div">
        <a class="btn btn-primary mb-3" href="create_task.php" name = "createBtn">Add new task</a>
        <form action="backend/process.php" method="GET">
        <table class = "table table-striped">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Priority</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
            <?php 
                include("../include/config.php");
                $query = "SELECT * FROM tasks";
                $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
            ?>                
            <tr>
                <td><?php echo $row['id']?> </td>
                <td><?php echo $row['title']?> </td>
                <td><?php echo $row['description']?> </td>
                <td><?php echo $row['priority']?> </td> 
                <td><?php echo $row['due_date']?> </td>
                <td>
                    <a class = "btn btn-warning" href = "update_task.php?id=<?php echo $id?>">Update</a>
                    <a class = "btn btn-danger" href = "delete_task.php?id=<?php echo $id?>">Delete</a>
                </td>
            </tr>
            <?php
             }
            }   
            ?>
        </table>
        </form>
    </div>
<?php include('../include/footer.php')?>
</body>
</html>