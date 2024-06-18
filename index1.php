<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>TODO Application</h1>
        <div class="todo-form">
            <form action="create_task.php" method="POST">
                <input type="text" name="description" placeholder="Enter a new task..." required>
                <button type="submit">Add Task</button>
            </form>
        </div>
        <ul id="task-list">
           <?php
include 'read_task.php';
foreach ($tasks as $task) {
    $completed = $task['completed'] ? 'completed' : '';
    echo "<li class='$completed'>" . htmlspecialchars($task['description']) . 
    " <div class='task-actions'>
        <form style='display:inline;' action='update_task.php' method='POST'>
            <input type='hidden' name='id' value='" . $task['id'] . "'>
            <input type='hidden' name='completed' value='" . ($task['completed'] ? 0 : 1) . "'>
            <button type='submit'>" . ($task['completed'] ? 'Undo' : 'Complete') . "</button>
        </form>
        <form style='display:inline;' action='delete_task.php' method='POST'>
            <input type='hidden' name='id' value='" . $task['id'] . "'>
            <button type='submit'>Delete</button>
        </form>
    </div></li>";
}
?>

        </ul>
    </div>
</body>
</html>
