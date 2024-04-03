<?php

include __DIR__ . "/../db_connection.php";

$result = $conn->query('SELECT id, type, name FROM categories');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h1>Categories List</h1>
            <div>
                <a href="create.php" class="btn btn-info">Create Category</a>
            </div>
        </div>

        <br>
        <br>

        <div class="table-responsive">
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>S. No. </th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                <?php

                if ($result->num_rows > 0) {

                    $sNo = 1;
                    while ($row=$result->fetch_assoc()) {
                       
                      echo "<tr>
                        <td>{$sNo}</td>
                        <td>{$row['type']}</td>
                        <td>{$row['name']}</td>
                        <td>
                        <a href='edit.php?id={$row['id']}' class='btn btn-outline-secondary btn-sm'>Edit</a>
                        <a href='delete.php?id={$row['id']}' class='btn btn-outline-danger btn-sm'>Delete</a>
                        </td>
                    </tr>";   

                    $sNo++;

                    }
                }
                else {
                    echo "<tr><td colspan='5'><center>No records found</center></td></tr>";
                }


                ?>
                    
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>