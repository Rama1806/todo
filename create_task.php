<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['description'])) {
    $description = $_POST['description'];
    $sql = "INSERT INTO tasks (description) VALUES ('$description')";

    if ($conn->query($sql) === TRUE) {
        header("Location:index1.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Description cannot be empty.";
}

$conn->close();
?>
