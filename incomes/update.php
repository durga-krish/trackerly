<?php

include __DIR__ . '/../db_connection.php';

$id = $_POST['id'];
$date = $_POST['date'];
$category = $_POST['category'];
$amount = $_POST['amount'];
$description = $_POST['description'];

$statement = $conn->prepare('UPDATE incomes set date = ?, category = ?, amount = ?, description = ? where id = ?');
$statement->bind_param("ssisi", $date, $category, $amount, $description, $id);

if($statement->execute())
{
    echo "<script>alert('Income updated successfully');</script>";
    echo "<Script>window.location.href = 'index.php';</script>";
}
else{
    echo "Error = " . $conn->error;
}

$statement->close();
