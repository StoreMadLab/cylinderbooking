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
                        <h4>Distributor Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Distributor Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>ADDRESS</label>
                                <input type="text" name="adress" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CITY</label>
                                <input type="text" name="city" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PIN </label>
                                <input type="text" name="pin" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>MOBILE NO</label>
                                <input type="text" name="m_no" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>EMAIL ID</label>
                                <input type="text" name="e_id" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>STATUS</label>
                                <input type="text" name="statuss" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_distributor" class="btn btn-primary">Save
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