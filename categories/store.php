<?php

include __DIR__ . '/../db_connection.php';

$type = $_POST['type'];
$name = $_POST['name'];

$statement = $conn->prepare("INSERT INTO categories (type, name) VALUES (?, ?)");

$statement->bind_param("ss", $type, $name);

if ($statement->execute()) {
    echo '<script>alert("Category created successfully");</script>';
    echo '<script>window.location.href = "index.php";</script>';
} else {
    echo "Error: " . $conn->error;
}

$statement->close();    