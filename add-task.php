<?php
// Include database connection
include 'db-connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize inputs
    $task_name = mysqli_real_escape_string($conn, $_POST['task_name']);
    $t_description = mysqli_real_escape_string($conn, $_POST['t_description']);
    $due_date = mysqli_real_escape_string($conn, $_POST['due_date']);
    $priority_level = mysqli_real_escape_string($conn, $_POST['priority_level']);
    $t_status = isset($_POST['t_status']) ? 'Completed' : 'Pending';

    // Create insert query
    $sql = "INSERT INTO tasks (task_name, t_description, due_date, priority_level, t_status) 
            VALUES ('$task_name', '$t_description', '$due_date', '$priority_level', '$t_status')";

    // Execute the query and check for errors
    if(mysqli_query($conn,$sql))
	{
		//echo"<script>alert('new record inserted!')</script>";
		header('location:view-tasks.php');
	}
	else
	{
		echo"ERROR :".mysqli_error($conn);
		
	}
    mysqli_close($conn);
} else {
    echo "Invalid request method.";
}
?>

