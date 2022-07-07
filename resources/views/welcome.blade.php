@extends('layouts.app')
@section('content')

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="position: relative;">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="/images/banner-1.jpg" class="d-block w-100" alt="fitness girl">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/images/banner-2.jpg" class="d-block w-100" alt="fitness girl">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
{{--        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Next</span>--}}
{{--        </button>--}}
        <div id="txt-community" class="d-none d-md-block">
            COMMUNITY
        </div>
        <div id="bg-community" class="d-none d-md-block">
            COMMUNITY
        </div>
    </div>

    <div class="bg-pink-gradient">
        <div class="container">
            <p class="text-white text-center txt-lg">
                Welcome to Align Boutique! Our store serves a community of movers... dancers, athletes, yogis, and those looking for athleisure wear will find their favorite brands locally in Friendswood at Align Boutique.
            </p>
        </div>
    </div>
    <div style="position: relative;" class="mb-5 pb-5">
        <div class="custom-shape-divider-top-1656905030">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>


    <div class="container my-5" id="brand">
        <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
            <div class="d-flex justify-content-center col p-0"><img src="/images/logo-beyond-yoga.png" alt="logo" class="img-fluid"></div>
            <div class="d-flex justify-content-center col p-0"><img src="/images/logo-alo-yoga.jpeg" alt="logo" class="img-fluid"></div>
            <div class="d-flex justify-content-center col p-0"><img src="/images/logo-bloch.jpg" alt="logo" class="img-fluid"></div>
            <div class="d-flex justify-content-center col p-0"><img src="/images/logo-body-wrappers.jpeg" alt="logo" class="img-fluid"></div>
            <div class="d-flex justify-content-center col p-0"><img src="/images/logo-mono-b.png" alt="logo" class="img-fluid"></div>
            <div class="d-flex justify-content-center col p-0"><img src="/images/logo-free-people-movement.png" alt="logo" class="img-fluid"></div>
            <div class="d-flex justify-content-center col p-0"><img src="/images/logo-capezio.jpg" alt="logo" class="img-fluid"></div>
            <div class="d-flex justify-content-center col p-0"><img src="/images/logo-lululemon.png" alt="logo" class="img-fluid"></div>
            <div class="d-flex justify-content-center col p-0"><img src="/images/logo-spiritual-gangster.png" alt="logo" class="img-fluid"></div>
        </div>
    </div>

    <div class="geometric my-3">
        <div class="container">
            <div class="row">
                <div class="col-sm m-3 d-flex align-items-center justify-content-center">
                    <div>
                        <h2 class="quinn">Visit Our Store</h2>
                        <p>
                            <br><strong>LOCATION</strong>
                            <br>122 S. Friendswood Dr.
                            <br>Friendswood TX, 77546
                            <br>
                            <br><strong>STORE HOURS</strong>
                            <br>Monday - Friday - 11:00am - 7:00pm
                            <br>Saturday - 10:00am - 4:00pm
                            <br>Sunday - Closed
                            <br>
                            <br><strong>CONTACT</strong>
                            <br>Call | 281-992-2166
                            <br>email | info@alignboutiquefriendswood.com
                        </p>
                    </div>
                </div>
                <div class="col-sm" style="position: relative;">
                    <img src="/images/pic3.jpg" alt="dancer" class="img-fluid shadow rounded" style="transform: scale(0.75);">
                    <div id="img-border"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
