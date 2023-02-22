<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product catelogue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .sidebar {
            color: white;
            background-color: black;
            height: 740px;
            padding-top: 20px;
        }

        .sidebar a {
            text-decoration: none;
            padding: 10px;
            color: white;
        }
        li{
            list-style: none;
        }
        .card img{
            height: 200px;
            width: 150px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 sidebar">

                <nav class="nav flex-column">
                    <h4>Menu</h4>
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="product_catelogue">Product Catelog</a>
                    <a class="nav-link" href="add_product">Add Product</a>
                    <a class="nav-link " href="Change_password">Change Password</a>
                    <a class="nav-link" href="seller_prof">Profile</a>
                    <a class="nav-link" href="seller_recent_orders">Recent Orders</a>
                    <a class="nav-link" href="Update_stock">Update Stock</a>

                    <a class="nav-link ">Order Hstory</a>

                </nav>
            </div>
            <div class="col-lg-9">
                <h1>PRODUCT CATELOGUE</h1>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product Category</h5>
                        <ul>
                            <li>Description</li>
                            <li> Brand </li>
                            <li>Price</li>
                            <li>Seller Name</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>