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
</head>
<body>
    <h2 class = "d-flex justify-content-center">Add a new task</h2>
    <br>
    <form action = "../backend/process.php" method="post" class = "d-flex flex-column align-items-center">
        <div class = "form-outline mb-3">
            <label class = "form-label" for = "title">Title: </label>
            <input type="text" class = "form-control" id = "title" placeholder="Enter short title of task" name = "title" required>
        </div>

        <div class = "form-outline mb-3">
            <label class = "form-label" for = "description">Description: </label>
            <input type="text" id = "title" class="form-control" placeholder="Short Description" name = "description" required>
        </div>

        <div class = "form-outline mb-3">
            <label class = "form-label" for = "dueDate">Due Date: </label>
            <input type="text" id = "title" class = "form-control" placeholder="(eg. 2024-02-30)" name = "dueDate" required>
        </div>

        <label for="priority">Priority:</label>
        <select name="priority" id="priority">
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select>
        <br><br>

        <button class="btn btn-primary" type = "submit" name = "submitTask">Submit</button>
    </form>
<?php include("../include/footer.php")?>
</body>
</html>