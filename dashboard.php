<?php
// DB Connection
$conn = new mysqli("localhost", "root", "", "ecommerce_db");

// Customer Count
$customer_result = $conn->query("SELECT COUNT(*) AS total_customers FROM customers");
$customer_data = $customer_result->fetch_assoc();
$total_customers = $customer_data['total_customers'];

// Product Count
$product_result = $conn->query("SELECT COUNT(*) AS total_products FROM products");
$product_data = $product_result->fetch_assoc();
$total_products = $product_data['total_products'];

// Order Count
$order_result = $conn->query("SELECT COUNT(*) AS total_orders FROM orders");
$order_data = $order_result->fetch_assoc();
$total_orders = $order_data['total_orders'];
?>

<?php include "sidebar.php"; ?>
<div class="content">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

<h2 class="mb-4">Dashboard</h2>

<div class="row">

    <!-- Customer Card -->
    <div class="col-md-4">
        <div class="card bg-primary text-white mb-3">
            <div class="card-body text-center">

                <!-- CLICKABLE COUNT -->
                <a href="customer_list.php" style="color:white; text-decoration:none;">
                    <h3><?php echo $total_customers; ?></h3>
                </a>

                <p>Total Customers</p>
            </div>
        </div>
    </div>

    <!-- Product Card -->
    <div class="col-md-4">
        <div class="card bg-success text-white mb-3">
            <div class="card-body text-center">

                <a href="product_list.php" style="color:white; text-decoration:none;">
                    <h3><?php echo $total_products; ?></h3>
                </a>

                <p>Total Products</p>
            </div>
        </div>
    </div>

    <!-- Order Card -->
    <div class="col-md-4">
        <div class="card bg-warning text-dark mb-3">
            <div class="card-body text-center">

                <a href="order_list.php" style="color:black; text-decoration:none;">
                    <h3><?php echo $total_orders; ?></h3>
                </a>

                <p>Total Orders</p>
            </div>
        </div>
    </div>

</div>

</div>
<?php include "footer.php"; ?>
