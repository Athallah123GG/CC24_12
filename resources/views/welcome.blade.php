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

        *{
            font-family: "Lexend", sans-serif;
        }

        .kotak{
            border-radius: 20px;
        }

        .btn-baru{
            background-color: black;
        }

        .text-putih{
            color: white;
        }


    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <img src="assets/logo/logo.png " class="" style="max-height: 80px" alt="">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"       aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    </nav>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactus">Detail</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="route {{'keranjang'}}">Keranjang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register">Register</a>
            </li>


        </ul>
        <form class="form-inline my-2 my-lg-0  mx-5">
            <input class="form-control mr-sm-2" style="width: " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>



    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6 ">
                    <h1>Merah Putih</h1>
                    <span>Toko Online Laptop Terbaik Di Indonesia</span>
                    <div class="my-5" style="">
                        <button type="button" class="btn btn-primary">EXPLORE</button>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                   <img src="assets/banner/home.png" style="width: 100% ; height: 100%;" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class=" ">
        <div class="container my-5  ">
        <h2 class="text-center">Categories</h2>
        <div class="row my-5 mx-auto ">

            <div class="col-lg-2">
                    <img src="assets/category/accessoris.png" class="" alt="...">
                    <h5 class="text-center">Accesoris</h5>
            </div>
            <div class="col-lg-2">
                    <img src="assets/category/camera.png" class="" alt="...">
                    <h5 class="text-center">Camera</h5>
            </div>
            <div class="col-lg-2">
                    <img src="assets/category/gaming.png" class="" alt="...">
                    <h5 class="text-center">Gaming</h5>

            </div>
            <div class="col-lg-2">
                    <img src="assets/category/hp.png" class="" alt="...">
                    <h5 class="text-center">Handphone</h5>

            </div>
            <div class="col-lg-2">
                    <img src="assets/category/laptop.png" class="" alt="...">
                    <h5 class="text-center">laptop</h5>

            </div>
            <div class="col-lg-2">
                    <img src="assets/category/smartwatch.png" class="" alt="...">
                    <h5 class="text-center">Smartwatch</h5>

            </div>

        </div>
    </div>
</section>

<section class="my-5">
    <div class="conainer my-5"></div>
</section>


<div class="container my-5 mx-auto ">

        <h2 class="my-5">Products</h2>
        <div class="row ">
            <div class="col-lg-2 mx-4 ">
                <div class="card kotak " style="width: 13rem ;">
                    <img src="assets/laptops/image (1).png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-center">macbook M2 </h4 class="text-center">
                        <p class="card-text">Price : Rp 21,000,000</p>
                        <button type="button" class="btn btn-primary"><a href="route {{'detail'}}" class="text-putih">Detail</a></button>
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

    <section class="bg-primary ">
       <div class="container my-5 py-5 ">
        <h2 class="my-5 text-putih">Products On SALE!</h2>

        <div class="row">


            <div class="col-lg-2 mx-4 ">
                <div class="card kotak kotak" style="width: 13rem ;">
                    <img src="assets/products/macair15.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-center">MacBook M8 </h4 class="text-center">
                        <p class="card-text">Price : 15,750,000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mx-4 ">
                <div class="card kotak kotak" style="width: 13rem ;">
                    <img src="assets/products/echox.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-center">Headshet </h4 class="text-center">
                        <p class="card-text">Price : 22,000,000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mx-4 ">
                <div class="card kotak kotak" style="width: 13rem ;">
                    <img src="assets/products/ps.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-center">Play Station </h4 class="text-center">
                        <p class="card-text">Price : 18,699,000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mx-4 ">
                    <h3 class="text-putih"><a href=""></a>Products Sale Until 1 May 99</h3>
            </div>
        </div>
     </div>
    </section>



    <div class="container my-5 ">
        <h2>Best Seller</h2>
        <div class="row my-4">


            <div class="col-lg-3">
                <div class="card kotak" style="width: 13rem;">
                    <img src="assets/products/ps.png" class="card-img-top" alt="...">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card kotak" style="width: 13rem;">
                    <img src="assets/products/ip14.png" class="card-img-top" alt="...">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card kotak" style="width: 13rem;">
                    <img src="assets/products/s23.png" class="card-img-top" alt="...">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card kotak" style="width: 13rem;">
                    <img src="assets/products/vr.png" class="card-img-top" alt="...">
                    <div class="card-body">

                    </div>
                </div>
            </div>

        </div>


  </div>
</div>
</div>

    <section>

        <div class="container shadow-lg p-3 mb-5 bg-white rounded">
                <div class=" mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">

                    <div class="col-md-4">
                        <img src="assets/products/ip14.png" alt="...">
                    </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Detail Produk Best Seller</h5>
                        <p class="card-text">I Phone 14 Pro Max </p>
                        <p class="card-text">RAM : 32GB</p>
                        <p class="card-text">ROM : 512GB</p>
                        <p class="card-text">13,000,000</p>
                    </div>
                </div>
        </div>

    </section>

<section class=" ">
        <div class="container my-5  ">
        <h2 class="text-center">Top Brand</h2>
        <div class="row my-5 mx-auto ">

            <div class="col-lg-3">
                    <img src="assets/brands/lenovo.png" class="" alt="...">
            </div>
            <div class="col-lg-3">
                    <img src="assets/brands/canon.png" class="" alt="...">
            </div>
            <div class="col-lg-3">
                    <img src="assets/brands/samsung.png" class="" alt="...">
            </div>
            <div class="col-lg-3">
                    <img src="assets/brands/sony.png" class="" alt="...">
            </div>

        </div>
    </div>
</section>


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
                <div class="col-lg-3 " >
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
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>





