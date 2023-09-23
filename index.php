<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="resources\logo.png" />

</head>

<body>
   
    <!-- Carousel Section -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="resources/ban1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>TRAVEL GALLE</h5>
                    <p class="text-dark">Travelling is an amazing way to learn a lot of things in life. A lot of
                        people around the world travel every year to many places. Moreover,
                        it is important to travel to humans. Some travel to learn more while
                        some travel to take a break from their life. No matter the reason,
                        travelling opens a big door for us to explore the world beyond our
                        imagination and indulge in many things.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="resources/ban2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-dark">TRAVEL GALLE</h5>
                    <p>Holiday, the name even give the assent of relief and relaxation in
                        students and working individuals. A single Sunday or single
                        national occasion even refill happiness in individuals.
                        A long break from routine gives abundantly of chances to chase
                        for students and working individuals. They get time to remain
                        at home and follow their interests. In working life, 4-5 days
                        leave adequate to boost individuals’ vitality to start with new enthusiasm.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="resources/ban3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>TRAVEL GALLE</h5>
                    <p>Holidays are important as they give us time to relax and
                        rejuvenate. During holidays we get more time with our near ones and can pursue our hobbies.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Banner Section -->
    <div class="jumbotron text-center">
        <h1>Welcome to Our Website TRAVEL GALLE.</h1>
        <p>VACATION MODE ON.</p>
        <a class="btn btn-primary" href="product.php" role="button">SHOP NOW</a>
        <a class="btn btn-primary" href="adminLogin.php" role="button">ADMIN PROFILE</a>

    </div>
    <div class="text-center">
    <p class="mt-3">Do You Want to be a Service Provider at TRAVEL GALLE? <a href="serviceProvider.php">Register Here</a></p>
        

    </div>


    <?php
    include "footer.php";
    ?>

    <!-- Include Bootstrap JS (jQuery and Popper.js are required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>