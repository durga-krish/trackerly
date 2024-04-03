<?php

include __DIR__ . "/../db_connection.php";

$id = $_GET['id'];

$statement = $conn->prepare("DELETE FROM categories WHERE id = ?");
$statement->bind_param("i", $id);

if($statement->execute())
{
    echo "<script>alert('Category deleted successfully');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
}
else {
    echo "Error: " . $conn->error;
}

$statement->close();