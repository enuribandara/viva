<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Galle Accomodation</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="resources\logo.png" />

</head>

<body>

    <?php include "header.php"; ?>

    <div class="container mt-4">
        <h1 class="mb-4">Accomodation</h1>
        <div class="row">
            <!-- Product Cards -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="resources/amari.jpeg" alt="Product 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Description of Product 1</p>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                        <button class="btn btn-secondary btn-block">Add to Wishlist</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="resources/canayavilla.jpeg" alt="Product 2" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Description of Product 2</p>
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                        <button class="btn btn-secondary btn-block">Add to Wishlist</button>
                    </div>
                </div>
            </div>
            <!-- Add more product cards here -->
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </div>

    <?php
    include "footer.php";
    ?>

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>