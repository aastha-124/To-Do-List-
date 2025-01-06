<?php
include 'db-connection.php';

if (isset($_GET['id'])) {
    $task_id = $_GET['id'];
    $status = $_GET['status']; // Getting the status value (Completed)

    // Update the task status to 'Completed'
    $sql = "UPDATE tasks SET t_status = '$status' WHERE task_id = '$task_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Task marked as completed!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Redirect back to task list after update
    header("Location: view-tasks.php");
    exit();
}
?>
