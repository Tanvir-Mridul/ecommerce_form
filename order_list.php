<?php include "sidebar.php"; ?>
<div class="content">

<h2>All Orders</h2>

<?php
 include "configer.php";
$result = $conn->query("
    SELECT orders.order_id, customers.name, orders.total_amount, orders.order_status, orders.order_date
    FROM orders
    LEFT JOIN customers ON customers.customer_id = orders.customer_id
");
?>

<table class="table table-bordered table-striped">
    <tr>
        <th>Order ID</th>
        <th>Customer</th>
        <th>Total Amount</th>
        <th>Status</th>
        <th>Date</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['order_id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['total_amount'] ?></td>
            <td><?= $row['order_status'] ?></td>
            <td><?= $row['order_date'] ?></td>
        </tr>
    <?php } ?>
</table>

</div>
