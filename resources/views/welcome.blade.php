@extends('layout.app')

@section('page-css')

@endsection

@section('main-content')

    @include('layout.navbar')

    <div class="container my-5 mx-auto">
        <div class="row">
            <div class="col-lg-2">
                <div class="card" style="width: 13rem;">
                    <img src="../../storage/assets/laptops/image(1).png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card" style="width: 13rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card" style="width: 13rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card" style="width: 13rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card" style="width: 13rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer')

@endsection

@section('page-js')

@endsection
