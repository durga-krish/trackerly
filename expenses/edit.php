<?php

include __DIR__ . '/../db_connection.php';

$id = $_GET['id'];
$statement = $conn->prepare("SELECT date, category, amount, description FROM expenses where id = ?");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card border-dark">
                    <div class="card-header">Edit Expense</div>
                    <div class="card-body">

                        <form action="update.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">

                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" name="date" id="date" value="<?php echo $row['date']; ?>" required>
                            </div>


                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select name="category" class="form-select" id="category" required>
                                    <option value="" selected disabled>-- Select category --</option>
                                    <?php
                                    foreach (EXPENSE_CATEGORIES as $key => $value) {
                                        echo "<option value='{$key}' " . (($row['category'] == $key) ? 'selected' : '') . ">{$value}</option>";
                                    }
                                    ?>

                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" class="form-control" name="amount" id="amount" value="<?php echo $row['amount']; ?>" required>
                            </div>


                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="5"><?php echo $row['description']; ?></textarea>
                            </div>


                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-secondary">Clear</button>
                            </div>

                        </form>


                    </div>
                </div>
</body>

</html>