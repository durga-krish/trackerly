<?php

include __DIR__ . '/constants.php';

$conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
