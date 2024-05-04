<?php
include('../include/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>

    <link rel="stylesheet" href="../style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!--form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!--Name -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Enter product name" autocomplete="off" required="required">


            </div>
            <!--Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">


            </div>
            <!--keyword -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required">


            </div>

             <!-- need to fix categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select a category</option>
                    <?php
                    $select_query=$conn->prepare("SELECT * FROM `category`");
                    $select_query->execute();
                    $categories=$select_query->fetchAll(PDO::FETCH_ASSOC);                   
                    ?>
                    <?php
                    foreach($categories as $category)
                    { ?> 
                        <option value=''> <?php 
                        echo $category['$category_name']  ?>
                        </option>                   
                    <?php } ?>                    
                </select>
            </div>  
            

            <!--type -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_type" id="" class="form-select">
                    <option value="">Select a type</option>
                    <?php
                    $select_query=$conn->prepare("SELECT * FROM `typee`");
                    $select_query->execute();
                    $types=$select_query->fetchAll(PDO::FETCH_ASSOC);                   
                    ?>
                    <?php
                    foreach($types as $type)
                    { ?> 
                        <option value=''> <?php 
                        echo $type['$typee_name']  ?>
                        </option>                   
                    <?php } ?>
                </select>
                


            </div>

            <!--image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control"  required="required">


            </div>

            <!--image2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-labe2">Product Image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control"  required="required">


            </div>

            <!--image3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-labe3">Product Image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control"  required="required">


            </div>

            <!--price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">


            </div>

            <!--price -->
            <div class="form-outline mb-4 w-50 m-auto">
                
            <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Product"> 
            </div>


        </form>
    </div>
    
</body>
</html>