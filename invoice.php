<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="resources\logo.png" />

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Invoice</h2>
            </div>
            <div class="col-md-6 text-end">
                <p>Date: September 21, 2023</p>
                <p>Invoice #: 12345</p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Item 1</td>
                            <td>Product description for Item 1</td>
                            <td>2</td>
                            <td>$50.00</td>
                            <td>$100.00</td>
                        </tr>
                        <tr>
                            <td>Item 2</td>
                            <td>Product description for Item 2</td>
                            <td>3</td>
                            <td>$30.00</td>
                            <td>$90.00</td>
                        </tr>
                        <tr>
                            <td>Item 3</td>
                            <td>Product description for Item 3</td>
                            <td>1</td>
                            <td>$75.00</td>
                            <td>$75.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-end"><strong>Total:</strong></td>
                            <td><strong>$265.00</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
