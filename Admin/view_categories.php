<?php
include('../include/connect.php');

    $select_type = $conn->prepare("SELECT * FROM `category`");
    $select_type->execute();
    $categories = $select_type->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <th>ID</th>
    <th>Category Name</th>
    <?php foreach($categories as $category) { ?>
    <tr>
        <td><?php echo $category['category_id'] ?></td>
        <td><?php echo $category['category_name'] ?></td>
        
        
    </tr>
    <?php } ?>
</table>