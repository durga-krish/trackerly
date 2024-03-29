<?php

include __DIR__ . '/../constants.php';
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
                    <div class="card-header">Create Income</div>
                    <div class="card-body">

                        <form action="store.php" method="POST">

                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" name="date" id="date" required>
                            </div>


                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select name="category" class="form-select" id="category" required>
                                    <option value="" selected disabled>-- Select category --</option>
                                    <?php
                                    foreach (INCOME_CATEGORIES as $key => $value) {
                                        echo "<option value='{$key}'>{$value}</option>";
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" class="form-control" name="amount" id="amount" required>
                            </div>


                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="5"></textarea>
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

    </div>
</body>

</html>