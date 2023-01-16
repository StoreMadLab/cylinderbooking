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
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cutomer CRUD</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="wrapper">

<!-- Top bar -->
<div class="top_navbar">
<!-- logo -->
    <div class="logo">HGG</div>
<!-- menu button -->
   <div class="menu">
     <div class="hamburger">
     <i class="fas fa-bars"></i>
     </div>
     <span class="admin">Welcome Admin!</span>
   </div>

</div>

<!-- Sidebar -->
<div class="sidebar">
<div class="sidebar_inner">
  <ul>

      <li>
      <a href="index.php">
    <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
    <span class="text">Customer</span>
      </a>
      </li>
      <li>
      <a href="distributor_details.php">
    <span class="icon"><i class="fab fa-first-order" aria-hidden="true"></i></span>
    <span class="text">Distributor</span>
      </a>
      </li>
      <li>
      <a href="order-details.php">
    <span class="icon"><i class="fa fa-book"></i></span>
    <span class="text">Order</span>
      </a>
      </li>
      <li>
      <a href="cylinder-details.php">
    <span class="icon"><i class="fa fa-clipboard"></i></span>
    <span class="text">Order Details</span>
      </a>
      </li>
      <li>
      <a href="logout.php">
    <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
    <span class="text">Logout</span>
      </a>
      </li>
  </ul>
</div>
</div>

<script type="text/javascript">
var li_items = document.querySelectorAll(".sidebar ul li");
var hamburger = document.querySelector(".hamburger");
var wrapper = document.querySelector(".wrapper");




li_items.forEach((li_item)=>{
   li_item.addEventListener("mouseenter", ()=>{

    li_item.closest(".wrapper").classList.remove("hover_collapse");

  })
})
hamburger.addEventListener("click", () => {

hamburger.closest(".wrapper").classList.toggle("hover_collapse");
})

</script>
<div class="container mt-4">

<?php include('message.php'); ?>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Customer Details
                    <a href="customer-create.php" class="btn btn-primary float-end">Add Customers</a>
                </h4>
                
            </div>
            <div class="card-body">
            <div class="col-md-7">

<form action="" method="GET">
<div class="input-group mb-3">
<input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
<button type="submit" class="btn btn-primary">Search</button>
<button type="submit" class="btn btn-primary" style="margin-left:0.4rem;background-color:#198754;"><a href="index.php"style="text-decoration:none;color:white;">Refresh</a></button>
</div>
</form>

</div>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                            $con = mysqli_connect("localhost","root","","blog");

                            if(isset($_GET['search']))
                            {
                                $filtervalues = $_GET['search'];
                                $query = "SELECT * FROM customers WHERE CONCAT(name,email,phone) LIKE '%$filtervalues%' ";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $items)
                                    {
                                        ?>
                                         <tr class="search">
                                        <td><?= $items['id']; ?></td>
                                        <td><?= $items['name']; ?></td>
                                        <td><?= $items['email']; ?></td>
                                        <td><?= $items['phone']; ?></td>
                                        <td><?= $items['adress']; ?></td>
                                        <td><?= $items['city']; ?></td>
                                        <td>
                                            <a href="customer-view.php?id=<?= $items['id']; ?>" class="btn btn-info btn-sm">View</a>
                                            <a href="customer-edit.php?id=<?= $items['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_customer" value="<?=$items['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                        <?php
                                    
                                    }
                             exit(0);
                                }
                                else
                                {
                                    ?>
                                        <tr>
                                            <td colspan="4">No Record Found</td>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>


                              


                        <?php 
                            $query = "SELECT * FROM customers";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $items)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $items['id']; ?></td>
                                        <td><?= $items['name']; ?></td>
                                        <td><?= $items['email']; ?></td>
                                        <td><?= $items['phone']; ?></td>
                                        <td><?= $items['adress']; ?></td>
                                        <td><?= $items['city']; ?></td>
                                        <td>
                                            <a href="customer-view.php?id=<?= $items['id']; ?>" class="btn btn-info btn-sm">View</a>
                                            <a href="customer-edit.php?id=<?= $items['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_customer" value="<?=$items['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> No Record Found </h5>";
                            }
                        ?>
                        
                        
                    </tbody>
                    
                </table>

            </div>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  
   
</body>
</html>