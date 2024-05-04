<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid p-0">

        <!--first child-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <span>Beauty Leather</span>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul class=navbar-nav>
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </nav>
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">
                Manage Details
            </h3>
        </div>

        <!--third child-->
        <div class="row">
            <div class="col-md-12 bg-light p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../img/5.jpg" alt="" class="admin-image"></a>
                    <p class="text-black text-center">
                        Admin Name
                    </p>
                </div>
                <div class="button text-center">
                    <button class="me-3"><a href="insert_product.php" class="nav-link text-dark bg-white my-1">Insert Products</a></button>

                    <button class="me-3"><a href="" class="nav-link text-dark bg-white my-1">View Products</a></button>

                    <button class="me-3"><a href="index.php?insert_category" class="nav-link text-dark bg-white my-1">Insert Categories</a></button>

                    <button class="me-3"><a href="index.php?view_categories" class="nav-link text-dark bg-white my-1">View Categories</a></button>

                    <button class="me-3"><a href="index.php?insert_type" class="nav-link text-dark bg-white my-1">Insert Types</a></button>

                    <button class="me-3"><a href=" index.php?view_types" class="nav-link text-dark bg-white my-1">View Types</a></button>

                    <button class="me-3"><a href="" class="nav-link text-dark bg-white my-1">All Orders</a></button>

                    <button class="me-3"><a href="" class="nav-link text-dark bg-white my-1">All Payments</a></button>

                    <button class="me-3"><a href="" class="nav-link text-dark bg-white my-1">List Users</a></button>

                    <button class="me-3"><a href="" class="nav-link text-dark bg-white my-1">Logout</a></button>

                </div>

            </div>
        </div>


        <!--fourth child-->


        <div class="container my-3">
            <?php
            if( isset($_GET['insert_category']) ){
                include('insert_categories.php');

            }
            if( isset($_GET['insert_type'])){
                include('insert_type.php');
            }
            if( isset($_GET['view_types'])){
                include('view_types.php');
            }
            if( isset($_GET['view_categories'])){
                include('view_categories.php');
            }
            
            ?>
        </div>



        <div class="bg-light p-2 text-center">
            <p>All rights reserved. Designed by <strong>OLD CREW</strong>.</p>
        </div>

    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>