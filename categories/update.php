<?php

include __DIR__ . '/../db_connection.php';

$id = $_POST['id'];
$type = $_POST['type'];
$name = $_POST['name'];

$statement = $conn->prepare('UPDATE categories set type = ?, name = ? where id = ?');
$statement->bind_param("ssi", $type, $name, $id);

if($statement->execute())
{
    echo "<script>alert('Category updated successfully');</script>";
    echo "<Script>window.location.href = 'index.php';</script>";
}
else{
    echo "Error = " . $conn->error;
}

$statement->close();
