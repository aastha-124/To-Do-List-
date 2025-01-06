<?php
include 'db-connection.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>TO-DO LIST !!</title>
  </head>
  <body>
    <div class="container">
    <center><button class="btn btn-primary my-5"><a href="form-layout.php" class="text-light">Add Task</a>
</button></center>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Task Name</th>
      <th scope="col">Task Description</th>
      <th scope="col">Due Date</th>
      <th scope="col">Priority</th>
      <th scope="col">Status</th>
      
  </thead>
  <tbody>
    <?php
    $sql="Select * from tasks";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        
        while($task = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $task["task_name"] . "</td>
                    <td>" . $task["t_description"] . "</td>
                    <td>" . $task["due_date"] . "</td>
                    <td>" . $task["priority_level"] . "</td>
                    <td>" . $task["t_status"] . "</td>
                    <td>" . $task["level"] . "</td>
                    <td>
                      <button class='btn btn-success'><a href='update-task.php?id=" . $task['task_id'] . "&status=Completed' class='text-light'>Mark as Completed</a></button>
                      <button class='btn btn-danger'><a href='delete-task.php?id=" . $task['task_id'] . "' class='text-light'>Delete</a></button>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No tasks found";
    }
    
    mysqli_close($conn);
    ?>
    


   