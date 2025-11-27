<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Form (Bootstrap)</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

   
<link rel="stylesheet" href="style.css">
</head>
<body>
   <?php include "sidebar.html"; ?>


<div class="container">
    <div class="form-box">
        <h3 class="text-center mb-4">Add New Customer</h3>

        <form action="insert_customer.php" method="POST">

            <div class="mb-3">
                <label class="form-label">Customer Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input placeholder="abcd@gmail.com" type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">City</label>
                <input type="text" name="city" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Country</label>
                <input type="text" name="country" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary w-100">Save Customer</button>

        </form>
    </div>
</div>

</div>
<?php include "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
