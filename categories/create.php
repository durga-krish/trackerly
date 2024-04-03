<?php

include __DIR__ . "/../constants.php";
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
                    <div class="card-header">Create Category</div>
                    <div class="card-body">

                        <form action="store.php" method="POST">

                            <div class="mb-3">
                                <label for="type">Type</label><br>
                                <input type="radio" name="type" id="income" value="income" required>
                                <label for="income">Income</label><br>
                                <input type="radio" name="type" id="expense" value="expense" required>
                                <label for="expense">Expense</label><br>
                            </div>

                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Clear</button>
                            </div>

                        </form>
                    </div>

</body>

</html>