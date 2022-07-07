@extends('layouts.app')
@section('content')

    <div class="container">
        <h2 class="quinn text-center my-4">Custom Costumes</h2>
        <div class="row mb-3">
            <div class="col-sm-5 d-flex align-items-center">
                <img src="/images/logo-custom-costumes.png" alt="custom costumes logo" class="img-fluid">
            </div>
            <div class="col-sm-7 d-flex align-items-center">
                <p class="px-2 txt-lg" style="border-left: 2px solid #6A4187">
                    Stand out on stage with an original creation by Gaby, designed with you in mind!  Each costume is tailored to you physically and artistically, to enhance each movement and let your personality shine.
                </p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
            <div class="col py-4"><img src="/images/cc-1.jpg" alt="dancer in custom costume" class="img-fluid shadow rounded"></div>
            <div class="col py-4"><img src="/images/cc-2.jpg" alt="dancer in custom costume" class="img-fluid shadow rounded"></div>
            <div class="col py-4"><img src="/images/cc-3.jpg" alt="dancer in custom costume" class="img-fluid shadow rounded"></div>
        </div>

        <div class="d-flex justify-content-center my-4">
            <div class="btn btn-lg btn-violet text-white px-4 shadow rounded">
                <a href="https://calendly.com/thedanceboutiquefwd/custom-costumes?month=2021-12" target="_blank" class="text-white" style="text-decoration: none;">
                    <ion-icon name="calendar-outline"></ion-icon>
                    Book Consultation
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-9"><img src="/images/costume-options.png" alt="costume options" class="img-fluid"></div>
            <div class="col-sm-3">
                <div class="px-2 mt-5" style="font-size: 2.25em; color: gold;">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <div class="d-flex justify-content-center px-2 mt-2" style="border-left: 2px solid #6A4187">
                    <p class="txt-lg">
                        Every dancer is looking to showcase their talent at competition. Gaby was able to bring MY vision to life, giving me a sense of ownership and pride on stage.
                    </p>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-sm-4"><img src="/images/gaby-chacon.png" alt="gaby chacon" class="img-fluid shadow rounded"></div>
            <div class="col-sm-8">
                <p class="mt-2">
                    Gaby is a third generation seamstress and has been a Dance Mom for over 10 years!  Gaby has a degree in graphic design, and a passion for the arts and crafts.  She originally moved to Friendswood in 2007 and then spent 5 years in the Los Angeles, CA area before returning to Friendswood in 2018.
                    <br><br>
                    Gaby's passion for sewing costumes started in 2011; triggered by her own need for unique pieces to showcase at her daughter's dance competitions.  She expanded her work to include her daughters entire competitive dance company in 2015  in Southern California. These costumes involved an extensive amount of rhinestone and bead work but were treasured for their originality, quality, and attention to detail. Gaby went on to make musical theater costumes and winning Best Costume.  As word spread about Gaby's designs, she started expanding her business to include groups from local studios and High School teams across the Southern California area.
                    <br><br>
                    Since returning to Friendswood in 2018, Gaby has been working on alterations and Company Costumes for local teams and dancers.  She has built a full in-home sewing and crafting studio where she does all of her work.  Gaby is partnering with The Dance Boutique so that we can bring quality and beauty to our local arts community through Custom Costume Creations.
                </p>
            </div>
        </div>

        <div class="mt-5 px-2" style="border-left: 2px solid #6A4187">
            <p class="txt-lg">
                “I was raised with a needle in one hand and a pencil in the other one.” –  Gaby Chacon
            </p>
        </div>

    </div>

    @include('divider')

@endsection
