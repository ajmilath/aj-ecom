<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .customer_nav {
            background-color: white;
            height: 50px;
        }

        .customer_nav a {
            color: black;
        }

        .customer_nav li {
            padding-left: 30px;
        }

        .customer_nav ul {
            margin-left: 500px;
        }

        .carousel-item,
        .carousel-item img {
            height: 600px;
            width: 1000px;

        }

        .banner,
        .banner img {
            position: relative;
            left: 0px;

        }

        .products a {
            text-decoration: none;
        }

        .product_details_img img {
            height: 400px;
            width: 300px;
        }

        .product_details_description h5 {
            color: orangered;
        }

        .product_details_description p {
            font-size: 25px;
        }
        i{
            padding-top: 15px;
        }
        .user_image img{
            width: 200px;
            height: 300px;
        }
        .user_profile a{
            font-size: 25px;
            text-decoration: none;
            padding: 10px;
        }
        .user_profile i{
            font-size: 25px;
            text-decoration: none;
            padding: 10px;
       
        }
        .cart_product img{
             width: 150px;
             height: 200px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid customer_nav">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Furniture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home Decor</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link">Lamps & Lighting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Kitchen & Dining</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Applicants</a>
                    </li>
                    <li>
                   <a href=""> <i class="fa-solid fa-right-from-bracket" ></i></a>
                    </li>
                    <li>
                    <a href="customer_profile"><i class="fa-solid fa-user"></i></a>
                    </li>
                    <li>
                    <a href="customer/cart"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div>
        @yield('content')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>