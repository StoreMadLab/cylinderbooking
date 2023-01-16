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
                                <label>Cylinder Amount</label>
                                <input type="text" name="amount" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Cylinder Weight</label>
                                <input type="text" name="weight" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>No of Cylinders</label>
                                <input type="text" name="no_of_Cylinder" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Order Date</label>
                                <input type="date" name="Bdate" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Delivery Date</label>
                                <input type="date" name="Ddate" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Total Amount</label>
                                <input type="text" name="T_amount" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_order" class="btn btn-primary">Book
                                    Cylinder</button>
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