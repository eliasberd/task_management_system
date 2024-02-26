<?php 
session_start();
include("../include/config.php");

if(isset($_POST["submitTask"])){
    $title = $_POST["title"];
    $description = $_POST["description"];
    $dueDate = $_POST["dueDate"];
    $priority = $_POST["priority"];

    $query = "INSERT INTO tasks(title, description, priority, due_date) VALUES('$title', '$description', '$priority', '$dueDate')";
    $result = mysqli_query($conn, $query);

    if($result){
        $_SESSION['status'] = "Task Created Sucessfully!";
        $_SESSION['status_code'] = "success";
        header("Location: ../pages/view_tasks.php");
        exit();
    }
}

if(isset($_POST["deleteTask"])){    
    $task_id = $_SESSION['task_id'];

    $query = "DELETE FROM tasks WHERE id = $task_id";
    $result = mysqli_query($conn, $query); 

    if($result){
        $_SESSION['status'] = "Task Deleted Successfully!";
        $_SESSION['status_code'] = "success";
        header("Location: ../pages/view_tasks.php");
        exit();
    }
}

if(isset($_POST["updateTask"])){    
    $task_id = $_SESSION['task_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['dueDate'];
    $priority = $_POST['priority'];

    $query = "UPDATE tasks SET title = '$title', description = '$description', priority = '$priority', due_date = '$due_date' WHERE id = $task_id";
    $result = mysqli_query($conn, $query); 

    if($result){
        $_SESSION['status'] = "Task Updated Successfully!";
        $_SESSION['status_code'] = "success";
        header("Location: ../pages/view_tasks.php");
        exit();
    }
}
?>