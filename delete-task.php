<?php
include 'db-connection.php';

if (isset($_GET['id'])) {
    $task_id = $_GET['id'];

    // Query to delete the task
    $sql = "DELETE FROM tasks WHERE task_id = '$task_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Task deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Redirect back to task list after delete
    header("Location: view-tasks.php");
    exit();
}
?>
