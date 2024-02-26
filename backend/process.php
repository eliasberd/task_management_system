<?php
include("config.php");

if(isset($_POST["submitTask"])){
    $title = $_POST["title"];
    $description = $_POST["description"];
    $dueDate = $_POST["dueDate"];
    $priority = $_POST["priority"];

    $query = "INSERT INTO tasks(title, description, priority, due_date) VALUES('$title', '$description', '$priority', '$dueDate')";
    $query_result = mysqli_query($con, $query);

    if($query_result){
        header("Location: ../index.php");
        exit();
    }
}

?>