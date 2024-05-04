<?php
include('../include/connect.php');
if( isset($_POST['insert_type']) ){
    // Sanitize input
    $type_title = $_POST['type_title'];
    
    try {

        // Prepare the SQL statement
        $insert_type_query = $conn->prepare("INSERT INTO typee (typee_name) VALUES (:type_title)");
        // Bind parameters
        $insert_type_query->bindParam(':type_title', $type_title);
        // Execute the query
        $insert_type_query->execute();
        
        // Check if the query was successful
        if($insert_type_query->rowCount() > 0) {
            echo "<script>alert('Type has been added.')</script>";
        } else {
            echo "<script>alert('Failed to add type.')</script>";
        }
    } catch(PDOException $e) {
        // Handle SQL errors
        echo "Error: " . $e->getMessage();
    }
}

?>


<h2 class="text-center">Insert Type</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="type_title" placeholder="Insert Type" aria-label="Type" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  
<input type="submit" class="bg-info border-0 p-2 my-3" name="insert_type" value="Insert Type"  >
  
</div>
</form>