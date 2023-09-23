<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="resources\logo.png" />

</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div id="productImagesCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="resources/amari.jpeg" class="d-block w-100" alt="Product 1 Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="resources/canayavilla.jpeg" class="d-block w-100" alt="Product 1 Image 2">
                    </div>
                    <!-- Add more image slides here -->
                </div>
                <a class="carousel-control-prev" href="#productImagesCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#productImagesCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h2>Product Name</h2>
            <p>Product Description Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Price: $19.99</p>
            <div class="mt-3">
                <button class="btn btn-primary">Add to Cart</button>
                <button class="btn btn-danger ml-2">Add to Wishlist</button>
            </div>
        </div>
    </div>

    
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
