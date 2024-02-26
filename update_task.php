<?php 
include("include/header.php");
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
</head>
<body>
    <h2 class = "d-flex justify-content-center">Update task</h2>
    <br>
    <form action = "backend/process.php" method="POST" class = "d-flex flex-column align-items-center">
    <?php
    include("include/config.php");
    $_SESSION['task_id'] = $_GET['id'];
    $task_id = $_SESSION['task_id'];
    
    $query = "SELECT * FROM tasks WHERE id = $task_id";
    $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $title = $row['title'];
                $description = $row['description'];
                $priority = $row['priority'];
                $due_date = $row['due_date'];
    ?>
   
        <div class = "form-outline mb-3">
            <label class = "form-label" for = "title">Title: </label>
            <input type="text" class = "form-control" id = "title" value="<?php echo $title?>" name = "title" required>
        </div>

        <div class = "form-outline mb-3">
            <label class = "form-label" for = "description">Description: </label>
            <input type="text" id = "title" class="form-control" value="<?php echo $description?>" name = "description" required>
        </div>

        <div class = "form-outline mb-3">
            <label class = "form-label" for = "dueDate">Due Date: </label>
            <input type="text" id = "title" class = "form-control" value="<?php echo $due_date?>" name = "dueDate" required>
        </div>

        <label for="priority">Priority:</label>
        <select name="priority" id="priority">
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select>
        <br><br>

        <button class="btn btn-success" type = "submit" name = "updateTask">Update</button>
    </form>
    <?php
      }
    }
    include('include/footer.php')
    ?>
</body>
</html>