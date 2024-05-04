<?php
include('../include/connect.php');

    $select_type = $conn->prepare("SELECT * FROM `typee`");
    $select_type->execute();
    $typees = $select_type->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <th>ID</th>
    <th>Type Name</th>
    <?php foreach($typees as $typee) { ?>
    <tr>
        <td><?php echo $typee['typee_id'] ?></td>
        <td><?php echo $typee['typee_name'] ?></td>
        
        
    </tr>
    <?php } ?>
</table>