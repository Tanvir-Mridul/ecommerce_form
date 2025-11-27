<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include "sidebar.html"; ?>
<div class="container">
    <div class="form-box">
        <h3 class="text-center mb-4">Create New Order</h3>

        <form action="insert_order.php" method="POST">

            <!-- Customer ID -->
            <div class="mb-3">
                <label class="form-label">Customer ID</label>
                <input type="number" name="customer_id" class="form-control" required>
            </div>

            <!-- Order Status -->
            <div class="mb-3">
                <label class="form-label">Order Status</label>
                <select name="order_status" class="form-control">
                    <option value="Pending">Pending</option>
                    <option value="Processing">Processing</option>
                    <option value="Delivered">Delivered</option>
                    <option value="Cancelled">Cancelled</option>
                </select>
            </div>

            <!-- Total Amount -->
            <div class="mb-3">
                <label class="form-label">Total Amount</label>
                <input type="number" step="0.01" name="total_amount" class="form-control" required>
            </div>

            <!-- Payment Method -->
            <div class="mb-3">
                <label class="form-label">Payment Method</label>
                <select name="payment_method" class="form-control" required>
                    <option value="Cash">Cash</option>
                    <option value="Card">Card</option>
                    <option value="Bkash">Bkash</option>
                    <option value="Nagad">Nagad</option>
                    <option value="Rocket">Rocket</option>
                </select>
            </div>

            <!-- Shipping Address -->
            <div class="mb-3">
                <label class="form-label">Shipping Address</label>
                <textarea name="shipping_address" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Place Order</button>

        </form>
    </div>
</div>
</div>
<?php include "footer.php"; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
