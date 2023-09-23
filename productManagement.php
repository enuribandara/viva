<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Insert History</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="resources\logo.png" />

</head>

<body>
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
    <div class="container mt-5">
        <h2>Product Insert History</h2>

        <!-- Add a container to hold product entries -->
        <div id="productEntries" class="row"></div>

        <!-- Sample product entry template -->
        <script id="productEntryTemplate" type="text/html">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{productImage}}" class="card-img-top" alt="{{productName}}">
                    <div class="card-body">
                        <h5 class="card-title">{{productName}}</h5>
                        <p class="card-text">Description: {{productDescription}}</p>
                        <p class="card-text">Price: ${{productPrice}}</p>
                        <p class="card-text">Category: {{productCategory}}</p>
                        <button class="btn btn-primary" onclick="editProduct({{productId}})">Edit</button>
                        <button class="btn btn-danger" onclick="deleteProduct({{productId}})">Delete</button>
                    </div>
                </div>
            </div>
        </script>

        <!-- Modal for inserting/updating products -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="productForm">
                            <input type="hidden" id="productId">
                            <div class="form-group">
                                <label for="productName">Product Name</label>
                                <input type="text" class="form-control" id="productName" required>
                            </div>
                            <div class="form-group">
                                <label for="productDescription">Product Description</label>
                                <textarea class="form-control" id="productDescription" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="productPrice">Product Price</label>
                                <input type="number" class="form-control" id="productPrice" step="0.01" required>
                            </div>
                            <div class="form-group">
                                <label for="productCategory">Product Category</label>
                                <select class="form-control" id="productCategory" required>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Clothing">Clothing</option>
                                    <option value="Books">Books</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="saveProduct()">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button to add a new product -->
        <button class="btn btn-success mt-3" data-toggle="modal" data-target="#productModal">Add New Product</button>
    </div>

    <!-- Include Bootstrap JS and jQuery (for optional features) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        // Sample data for product entries
        const products = [{
                productId: 1,
                productName: 'Product 1',
                productDescription: 'Description 1',
                productPrice: 10.99,
                productCategory: 'Electronics',
                productImage: 'https://via.placeholder.com/150'
            },
            {
                productId: 2,
                productName: 'Product 2',
                productDescription: 'Description 2',
                productPrice: 19.99,
                productCategory: 'Clothing',
                productImage: 'https://via.placeholder.com/150'
            },
            // Add more products here
        ];

        // Function to render product entries
        function renderProductEntries() {
            const productEntries = document.getElementById('productEntries');
            const productEntryTemplate = document.getElementById('productEntryTemplate').innerHTML;

            productEntries.innerHTML = '';

            products.forEach(product => {
                const template = productEntryTemplate
                    .replace('{{productId}}', product.productId)
                    .replace('{{productName}}', product.productName)
                    .replace('{{productDescription}}', product.productDescription)
                    .replace('{{productPrice}}', product.productPrice)
                    .replace('{{productCategory}}', product.productCategory)
                    .replace('{{productImage}}', product.productImage);
                productEntries.innerHTML += template;
            });
        }

        // Function to open the product modal for editing
        function editProduct(productId) {
            const product = products.find(p => p.productId === productId);
            if (product) {
                document.getElementById('productId').value = product.productId;
                document.getElementById('productName').value = product.productName;
                document.getElementById('productDescription').value = product.productDescription;
                document.getElementById('productPrice').value = product.productPrice;
                document.getElementById('productCategory').value = product.productCategory;
                $('#productModal').modal('show');
            }
        }

        // Function to save the product (update or insert)
        function saveProduct() {
            const productId = document.getElementById('productId').value;
            const productName = document.getElementById('productName').value;
            const productDescription = document.getElementById('productDescription').value;
            const productPrice = document.getElementById('productPrice').value;
            const productCategory = document.getElementById('productCategory').value;

            if (productId) {
                // Update existing product
                const existingProduct = products.find(p => p.productId === parseInt(productId));
                if (existingProduct) {
                    existingProduct.productName = productName;
                    existingProduct.productDescription = productDescription;
                    existingProduct.productPrice = parseFloat(productPrice);
                    existingProduct.productCategory = productCategory;
                }
            } else {
                // Insert new product
                const newProductId = products.length + 1;
                const newProduct = {
                    productId: newProductId,
                    productName,
                    productDescription,
                    productPrice: parseFloat(productPrice),
                    productCategory,
                    productImage: 'https://via.placeholder.com/150', // Default image
                };
                products.push(newProduct);
            }

            renderProductEntries();
            $('#productModal').modal('hide');
        }

        // Function to delete a product
        function deleteProduct(productId) {
            const index = products.findIndex(p => p.productId === productId);
            if (index !== -1) {
                products.splice(index, 1);
                renderProductEntries();
            }
        }

        // Initial rendering of product entries
        renderProductEntries();
    </script>
</body>

</html>