<?php

include __DIR__ . '/../db_connection.php';

$date = $_POST['date'];
$category = $_POST['category'];
$amount = $_POST['amount'];
$description = $_POST['description'];

$statement = $conn->prepare("INSERT INTO expenses (date, category, amount, description) VALUES (?, ?, ?, ?)");

$statement->bind_param("ssds", $date, $category, $amount, $description);

if ($statement->execute()) {
    echo '<script>alert("New expense created successfully");</script>';
    echo '<script>window.location.href = "index.php";</script>';
} else {
    echo "Error: " . $conn->error;
}

$statement->close();
