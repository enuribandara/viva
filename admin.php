<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="resources\logo.png" />

</head>
<body class="bg-dark">


    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insertProduct.php">Insert Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productManagement.php">Manage product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <!-- Sidebar -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Admin Dashboard</h5>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#">Dashboard</a></li>
                            <li class="list-group-item"><a href="#">Profile</a></li>
                            <li class="list-group-item"><a href="#">Settings</a></li>
                            <li class="list-group-item"><a href="index.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Profile Card -->
                <div class="card">
                    <div class="card-header">
                        Admin Profile
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="" alt="Profile Picture" class="img-fluid rounded-circle mb-3" style="max-width: 200px;">
                            <h5 class="card-title">John Doe</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Administrator</h6>
                        </div>
                        <p class="card-text mt-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod euismod lacinia. 
                            Integer sit amet lectus a odio consequat ultrices. Proin quis erat nec urna iaculis eleifend.
                        </p>
                        <a href="#" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js links (for Bootstrap features like dropdowns) -->
    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
