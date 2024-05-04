<?php
include('../include/connect.php');
if( isset($_POST['insert_category']) ){
    // Sanitize input
    $category_title = $_POST['cat_title'];
    
    try {

        // Prepare the SQL statement
        $insert_category_query = $conn->prepare("INSERT INTO category (category_name) VALUES (:category_title)");
        // Bind parameters
        $insert_category_query->bindParam(':category_title', $category_title);
        // Execute the query
        $insert_category_query->execute();
        
        // Check if the query was successful
        if($insert_category_query->rowCount() > 0) {
            echo "<script>alert('Category has been added.')</script>";
        } else {
            echo "<script>alert('Failed to add category.')</script>";
        }
    } catch(PDOException $e) {
        // Handle SQL errors
        echo "Error: " . $e->getMessage();
    }
}

?>
<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Categories" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  
  <input type="submit" class="bg-info b-0  p-2" name="insert_category" value="Insert Categories">
  
</div>
</form>