<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Customer Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Distributor Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $distributor_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM distributor_detail WHERE id='$distributor_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $distributor = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $distributor['id']; ?>">

                                    <div class="mb-3">
                                        <label>Distributor Name</label>
                                        <input type="text" name="name" value="<?= $distributor['name']; ?>"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Distributor Address</label>
                                        <input type="text" name="adress" value="<?= $distributor['adress']; ?>"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Distributor City</label>
                                        <input type="text" name="city" value="<?= $distributor['city']; ?>"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PIN</label>
                                        <input type="text" name="pin" value="<?= $distributor['pin']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>MOBILE NO</label>
                                        <input type="text" name="m_no" value="<?= $distributor['m_no']; ?>"
                                            class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Distributor ID</label>
                                        <input type="text" name="e_id" value="<?= $distributor['e_id']; ?>"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>STATUS</label>
                                        <input type="text" name="statuss" value="<?= $distributor['statuss']; ?>"
                                            class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" name="update_distributor" class="btn btn-primary">
                                            Update distributor
                                        </button>
                                    </div>

                                </form>
                                <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>