<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Customer Create</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Customer Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Customer Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Customer Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Customer Address </label>
                                <input type="text" name="adress" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Customer City </label>
                                <input type="text" name="city" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_customer" class="btn btn-primary">Save
                                    Customer</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>