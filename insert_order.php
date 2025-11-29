<?php
// Database connection
 include "configer.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Receive form data
$customer_id      = $_POST['customer_id'];
$order_status     = $_POST['order_status'];
$total_amount     = $_POST['total_amount'];
$payment_method   = $_POST['payment_method'];
$shipping_address = $_POST['shipping_address'];

// Prepare insert query
$sql = "INSERT INTO orders (customer_id, order_status, total_amount, payment_method, shipping_address) 
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters: i = integer, s = string, d = decimal
$stmt->bind_param("isdss", $customer_id, $order_status, $total_amount, $payment_method, $shipping_address);

// Execute and check
if ($stmt->execute()) {
    echo "<h3>Order placed successfully!</h3>";
    echo "<a href='order_form.php'>Back to Order Form</a>";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
