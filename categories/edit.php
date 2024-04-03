<?php

use function PHPSTORM_META\type;

include __DIR__ . '/../db_connection.php';

$id = $_GET['id'];
$statement = $conn->prepare("SELECT type, name FROM categories where id = ?");
$statement->bind_param("i", $id);

$statement->execute();
$result = $statement->get_result();
$row = $result->fetch_assoc();

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
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card border-dark">
                    <div class="card-header">Edit Category</div>
                    <div class="card-body">

                        <form action="update.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">

                            <div class="mb-3">
                            <label for="type">Type</label><br>
                                <input type="radio" name="type" id="income" value="income" required
                                <?php if($row['type'] == 'income')
                                {
                                    echo "checked";
                    
                                }
                                ?>>
                                <label for="income">Income</label><br>
                                <input type="radio" name="type" id="expense" value="expense"required
                                <?php if ($row['type'] == 'expense') { echo "checked"; } ?>>
                                <label for="expense">Expense</label><br>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name']; ?>" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Clear</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
</body>

</html>