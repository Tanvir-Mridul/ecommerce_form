<?php
// Database connection
 include "configer.php"; 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Receive form data
$name     = $_POST['name'];
$email    = $_POST['email'];
$phone    = $_POST['phone'];
$address  = $_POST['address'];
$city     = $_POST['city'];
$country  = $_POST['country'];

// Insert query using prepared statement
$sql = "INSERT INTO customers (name, email, phone, address, city, country)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $name, $email, $phone, $address, $city, $country);

if ($stmt->execute()) {
    echo "<h3>Customer added successfully!</h3>";
    echo "<a href='customer_form.php'>Back to Form</a>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
