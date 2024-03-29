<?php
include __DIR__ . '/constants.php';
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
        <div class="row text-center justify-content-center">
            <div class="col-md-3">
                <h1 class="display-6 mb-4"><?php echo APP_NAME; ?></h1>

                <div class="list-group">
                    <a href="incomes" class="list-group-item list-group-item-action list-group-item-primary">Incomes</a>
                    <a href="expenses" class="list-group-item list-group-item-action list-group-item-success">Expenses</a>
                </div>

            </div>
        </div>


</body>

</html>