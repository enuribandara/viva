<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="resources\logo.png" />

</head>
<body>

<?php include "header.php" ?>

<div class="container mt-5">
    <h2>Your Shopping Cart</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Product 1</td>
                <td>$19.99</td>
                <td>
                    <input type="number" class="form-control" value="1" min="1">
                </td>
                <td>$19.99</td>
                <td>
                    <button class="btn btn-danger" onclick="removeFromCart(this)">Remove</button>
                </td>
            </tr>
            <tr>
                <td>Product 2</td>
                <td>$29.99</td>
                <td>
                    <input type="number" class="form-control" value="1" min="1">
                </td>
                <td>$29.99</td>
                <td>
                    <button class="btn btn-danger" onclick="removeFromCart(this)">Remove</button>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="text-right">
        <p>Total: $49.98</p>
        <a class="btn btn-primary" href="checkout.php">CHECKOUT</a>
    </div>
</div>

<?php include "footer.php" ?>


<script>
    function removeFromCart(button) {
        // Remove product logic here
        button.closest('tr').remove();
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
