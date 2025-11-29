<?php
// Database connection

 include "configer.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Receive form data
$product_name   = $_POST['product_name'];
$description    = $_POST['description'];
$price          = $_POST['price'];
$stock_quantity = $_POST['stock_quantity'];
$category       = $_POST['category'];

// SQL Insert Query (Prepared Statement)
$sql = "INSERT INTO products (product_name, description, price, stock_quantity, category)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssdis", $product_name, $description, $price, $stock_quantity, $category);

// Execute and check
if ($stmt->execute()) {
    echo "<h3>Product added successfully!</h3>";
    echo "<a href='product_form.php'>Back to Product Form</a>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
