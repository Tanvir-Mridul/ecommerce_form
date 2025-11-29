<?php include "sidebar.php"; ?>
<div class="content">

<h2>All Products</h2>

<?php
 include "configer.php";
$result = $conn->query("SELECT * FROM products");
?>

<table class="table table-bordered table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Category</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['product_id'] ?></td>
            <td><?= $row['product_name'] ?></td>
            <td><?= $row['price'] ?></td>
            <td><?= $row['stock_quantity'] ?></td>
            <td><?= $row['category'] ?></td>
        </tr>
    <?php } ?>
</table>

</div>
