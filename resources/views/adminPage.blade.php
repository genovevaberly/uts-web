<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#" style="font-weight: bold; color: #016170">ElliteBid.com Admin</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">User Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Auction Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>User Management</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Phone Number</th>
                        <th>Country</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add user data rows here -->
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="alert alert-info" role="alert">
                Total Users: <strong>1000</strong>
            </div>
            <div class="alert alert-success" role="alert">
                Active Users: <strong>750</strong>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-8">
            <h2>Auction Management</h2>
            <!-- Product Category List -->
            <ul>
                <li>Cars</li>
                <li>Accessories</li>
                <li>Antique</li>
                <li>Fashion Bag</li>
                <li>Shoes</li>
            </ul>
        </div>
        <div class="col-md-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Live Auctions</th>
                        <th>Sold Products</th>
                        <th>Active Stores</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add auction management data here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
