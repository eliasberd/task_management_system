<?php 
include("include/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>   
    <title>Task Management System</title>
</head>
<body>
    <div class = "main_div">
        <a class="btn btn-primary mb-3" href= "forms/createForm.php" name = "createBtn">Add new task</a>
        <table class = "table table-striped">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Priority</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>

            <tr>
                <td>Study</td>
                <td>Study for exam this Monday</td>
                <td>High</td> 
                <td>11/10/2024</td>
                <td>
                    <a class = "btn btn-warning" href = "forms/updateForm.php"  name = "updateBtn">Update</a>
                    <button type="submit" class = "btn btn-danger" name = "deleteBtn">Delete</button>
                </td>
            </tr>

            
        </table>
    </div>
    
</body>
</html>