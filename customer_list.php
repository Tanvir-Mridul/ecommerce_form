<?php include "sidebar.php"; ?>
<div class="content">

<h2>All Customers</h2>

<?php
// Database connection
 include "configer.php";
$result = $conn->query("SELECT * FROM customers");
?>

<table class="table table-bordered table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>City</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['customer_id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['city'] ?></td>
        </tr>
    <?php } ?>
</table>

</div>
