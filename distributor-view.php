<?php
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

    <title>Distributor View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Distributor Details
                            <a href="distributor_details.php" class="btn btn-danger float-end">BACK</a>
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

                                <div class="mb-3">
                                    <label>Distributor Name</label>
                                    <p class="form-control">
                                        <?= $distributor['name']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Distributor Address</label>
                                    <p class="form-control">
                                        <?= $distributor['adress']; ?>
                                    </p>
                                </div>
                                
                                <div class="mb-3">
                                    <label>Distributor City</label>
                                    <p class="form-control">
                                        <?= $distributor['city']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Distributor PIN</label>
                                    <p class="form-control">
                                        <?= $distributor['pin']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>MOBILE NO</label>
                                    <p class="form-control">
                                        <?= $distributor['m_no']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Distributor ID</label>
                                    <p class="form-control">
                                        <?= $distributor['e_id']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Distributor ID</label>
                                    <p class="form-control">
                                        <?= $distributor['statuss']; ?>
                                    </p>
                                </div>


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