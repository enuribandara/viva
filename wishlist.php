<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" href="resources\logo.png" />

</head>
<body>
    <?php include "header.php" ?>
    <div class="container mt-5">
        <h1>My Wishlist</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Product 1</td>
                    <td>$10.99</td>
                    <td>
                        <button class="btn btn-danger btn-sm" onclick="removeFromWishlist(this)">Remove</button>
                        <button class="btn btn-success btn-sm" onclick="addToCart(this)">Add to Cart</button>
                    </td>
                </tr>
                <tr>
                    <td>Product 2</td>
                    <td>$19.99</td>
                    <td>
                        <button class="btn btn-danger btn-sm" onclick="removeFromWishlist(this)">Remove</button>
                        <button class="btn btn-success btn-sm" onclick="addToCart(this)">Add to Cart</button>
                    </td>
                </tr>
                <!-- Add more wishlist items here -->
            </tbody>
        </table>
    </div>

    <?php include "footer.php" ?>

    <script>
        function removeFromWishlist(button) {
            // Get the parent row of the button and remove it
            $(button).closest('tr').remove();
        }

        function addToCart(button) {
            // You can implement the logic to add the product to the cart here
            // For demonstration purposes, let's just remove it from the wishlist
            removeFromWishlist(button);
        }
    </script>
</body>
</html>
