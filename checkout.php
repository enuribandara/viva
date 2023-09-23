<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="resources\logo.png" />

</head>

<body>

    <div class="container mt-5">
        <h2>Checkout</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>Shipping Information</h4>
                <form>
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" id="fullName" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Mobile No</label>
                        <input type="text" class="form-control" id="address" required>
                    </div>
                    <div class="form-group">
                        <label for="city">Address</label>
                        <input type="text" class="form-control" id="city" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h4>Payment Information</h4>
                <form>
                    <div class="form-group">
                        <label for="cardNumber">Credit Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" required>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="expiration">Expiration Date</label>
                            <input type="text" class="form-control" id="expiration" required>
                        </div>
                        <div class="col-md-6">
                            <label for="cvv">CVV</label>
                            <input type="text" class="form-control" id="cvv" required>
                        </div>


                    </div>
                </form>
            </div>
        </div>
        <a class="btn btn-primary" href="invoice.php">Pay Here</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>