<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tasks WHERE id = $id";

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
