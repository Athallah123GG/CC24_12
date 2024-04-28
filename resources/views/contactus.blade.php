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
            <li class="nav-item">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product">Products</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contactus">Detail</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="route {{'keranjang'}}">Keranjang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="route {{'login'}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
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
                <div class="col-lg-6 text-center">
                   <img src="assets/products/ip14.png" style="width: 100% ; height: 100%;" alt="">
                </div>

                <div class="col-lg-6 ">
                    <h1>i Phone 14 Pro Max</h1>
                    <span>Sebuah Smartphone Canggih yang Di Kembangkan Oleh Perusahaan Apple , Kini Di Banderoll Dengan Harga Yang Murah dan Terjangkau</span>

                       <p class="card-text my-4">RAM : 32GB</p>
                       <p class="card-text">ROM : 512GB</p>
                       <p class="card-text">Rp : 13,000,000</p>
                    <div class="my-5" style="">
                        <button type="button" class="btn btn-primary">Order!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



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





