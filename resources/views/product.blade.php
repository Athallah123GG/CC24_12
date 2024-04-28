<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HomePage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
</head>

<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap');

        * {
            font-family: "Lexend", sans-serif;
        }

        .kotak {
            border-radius: 20px;
        }

        .btn-baru {
            background-color: black;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <img src="assets/logo/logo.png " class="" style="max-height: 80px" alt="">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-5">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="product">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>


                    </ul>
                    <form class="form-inline my-2 my-lg-0  mx-5">
                        <input class="form-control mr-sm-2" style="width: " type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>

        </div>
    </nav>


    <div class="container my-5 mx-auto ">
        <h2 class="my-5">All Product</h2>
        <div class="container my-5 mx-auto ">
            <div class="row ">
                <div class="col-lg-2 mx-4 ">
                    <div class="card kotak kotak" style="width: 13rem ;">
                        <img src="assets/laptops/image (1).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">macbook M2 </h4 class="text-center">
                            <p class="card-text">Price : Rp 21,000,000</p>
                            <button type="button" class="btn btn-primary"><a href="/">Detail</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (2).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Macbook Air </h4 class="text-center">
                            <p class="card-text">Price : Rp 15,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (3).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Macbook M1 </h4 class="text-center">
                            <p class="card-text">Price : Rp 19,000,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (4).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Macbook Air2 </h4 class="text-center">
                            <p class="card-text">Price : Rp 15,500,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container my-5 mx-auto ">
            <div class="row ">
                <div class="col-lg-2 mx-4 ">
                    <div class="card kotak kotak" style="width: 13rem ;">
                        <img src="assets/laptops/image (5).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">macbook M5 </h4 class="text-center">
                            <p class="card-text">Price : Rp 25,000,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (6).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Dell latitude</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (7).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Macbook AirX </h4 class="text-center">
                            <p class="card-text">Price : Rp 20,000,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (8).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Macbook XR</h4 class="text-center">
                            <p class="card-text">Price : Rp 20,500,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container my-5 mx-auto ">
            <div class="row ">
                <div class="col-lg-2 mx-4 ">
                    <div class="card kotak kotak" style="width: 13rem ;">
                        <img src="assets/laptops/image (9).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Macbook eM2</h4 class="text-center">
                            <p class="card-text">Price : Rp 23,000,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (10).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Dell latitude</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (11).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Macbook M1 </h4 class="text-center">
                            <p class="card-text">Price : Rp 19,000,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (12).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Macbook AirX </h4 class="text-center">
                            <p class="card-text">Price : Rp 21,500,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container my-5 mx-auto ">
            <div class="row ">
                <div class="col-lg-2 mx-4 ">
                    <div class="card kotak kotak" style="width: 13rem ;">
                        <img src="assets/laptops/image (13).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Vivobook</h4 class="text-center">
                            <p class="card-text">Price : Rp 25,000,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (14).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">ASUS M1</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (15).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">LENOVO M1 </h4 class="text-center">
                            <p class="card-text">Price : Rp 19,000,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (16).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">ASUS AirX </h4 class="text-center">
                            <p class="card-text">Price : Rp 21,500,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container my-5 mx-auto ">
            <div class="row ">
                <div class="col-lg-2 mx-4 ">
                    <div class="card kotak kotak" style="width: 13rem ;">
                        <img src="assets/laptops/image (17).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">ASUS eM1 </h4 class="text-center">
                            <p class="card-text">Price : Rp 25,000,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (18).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Samsung KW</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (19).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Macbook S1</h4 class="text-center">
                            <p class="card-text">Price : Rp 19,000,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (20).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Macbook T3</h4 class="text-center">
                            <p class="card-text">Price : Rp 21,500,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container my-5 mx-auto ">
            <div class="row ">
                <div class="col-lg-2 mx-4 ">
                    <div class="card kotak kotak" style="width: 13rem ;">
                        <img src="assets/laptops/image (21).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Tas Laptop</h4 class="text-center">
                            <p class="card-text">Price : Rp 25,000,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/laptops/image (22).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Cas Belkin</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/products/airpod.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Airpod T5</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/products/echox.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">HeadphoneS</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5 mx-auto ">
            <div class="row ">
                <div class="col-lg-2 mx-4 ">
                    <div class="card kotak kotak" style="width: 13rem ;">
                        <img src="assets/products/smartwatch.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Smartwatch</h4 class="text-center">
                            <p class="card-text">Price : Rp 25,000,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/products/keyboard.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Keyboard K5</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/products/mouse.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Mouse GM</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/products/macbook.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Samsung GT</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5 mx-auto ">
            <div class="row ">
                <div class="col-lg-2 mx-4 ">
                    <div class="card kotak kotak" style="width: 13rem ;">
                        <img src="assets/products/macbook2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Lenovo V1</h4 class="text-center">
                            <p class="card-text">Price : Rp 25,000,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/products/macair15.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Macbook eM3</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/products/ps.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Playstation 2</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/products/s23.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Samsung S23</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5 mx-auto ">
            <div class="row ">
                <div class="col-lg-2 mx-4 ">
                    <div class="card kotak kotak" style="width: 13rem ;">
                        <img src="assets/products/ip14.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">Iphone 14</h4 class="text-center">
                            <p class="card-text">Price : Rp 25,000,000</p>
                            <button type="button" class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mx-4">
                    <div class="card kotak" style="width: 13rem;">
                        <img src="assets/products/vr.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center">VR Gaming</h4 class="text-center">
                            <p class="card-text">Price : Rp 5,000,000</p>
                            <button type="button" class="btn btn-primary ">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


        <footer class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h6>Company</h6>
                        <ul>
                            <li>
                                <a href="">About Us</a>
                            </li>
                            <li>
                                <a href="">Blog</a>
                            </li>
                            <li>
                                <a href="">Order Status</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h6>Info</h6>
                        <ul>
                            <li>
                                <a href="">How To Work</a>
                            </li>
                            <li>
                                <a href="">Comitmen</a>
                            </li>
                            <li>
                                <a href="">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 ">
                        <h6>Contact Us</h6>
                        <ul class="nav-item">
                            <li class="link-active">
                                <a href="">Jl.Siwalankerto No 12</a>
                            </li>
                            <li>
                                <a href="">+62764873627</a>
                            </li>
                            <li>
                                <a href="">Kcl@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h6>Sign Up</h6>
                    </div>
                </div>
            </div>

        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>
