<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['completed'])) {
    $id = $_POST['id'];
    $completed = $_POST['completed'];
    $sql = "UPDATE tasks SET completed = $completed WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index1.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
