@extends('layouts.app')
@section('content')

    <div class="container">
        <h2 class="quinn text-center my-4">The Store</h2>
        <div class="row">
            <div class="col-sm-5 d-flex align-items-center">
                Align Boutique is what it is today because it has evolved to better serve our community of movers. This store location has served the dance community for over XX years and is now a favorite spot among runners, yogis, gymnasts, tennis players, golfers, dancers and movers of all kinds. At Align Boutique you can expect superior customer service, knowledgeable dance professionals, and a wide collection of athletics and athleisure wear sourced from your favorite brands.
            </div>
            <div class="col-sm-7" style="position: relative;">
                <img src="/images/store-collage.jpg" alt="store collage" class="img-fluid shadow rounded">
                <div id="img-border-store"></div>
            </div>
        </div>
    </div>


    @include('divider')

    <div class="container">
        <h2 class="quinn text-center my-4">The Team</h2>
        <p>
            Our team is composed of dancers, dance moms, and athletes giving us a first hand opportunity to serve our customers. When you walk into our store, we want you to feel at home as you browse collections of dance and athletic wear that you both need and want!  Our knowledgeable team is here to guide you in picking out the dance and athletic wear for your body, leaving you feeling more comfortable and confident while doing what you love best.
        </p>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            <div class="col-sm my-1 p-4">
                <div class="row">
                    <div>Dominique George <span class="quinn-sm">Store Manager</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-dominique.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm txt-team mt-2">
                        Dominique studied dance, music and acting in Louisiana and has a BFA in Performing Arts with a concentration in Dance from University of Louisiana. She also danced with Ad Deum II in Fall 2019 through Spring 2020 and is the current Assistant Director for Friendswood Contemporary Ballet. Dominique has previous experience in dance wear retail and is happy to be supporting our local dance community through her role at The Dance Boutique.
                    </div>
                </div>
            </div>
            <div class="col-sm my-1 p-4">
                <div class="row">
                    <div>Shanika Williams <span class="quinn-sm">Assistant Store Manager</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-shanika.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm txt-team mt-2">
                        Shanika is a Drill Team Dance Mom herself and has been in the shoes of many of our customers. She brings with her, years of experience in customer service and store management from Mac Cosmetics. Shanika's attention to detail and passion for helping our customers find exactly what they're looking for makes her the perfect fit.
                    </div>
                </div>
            </div>
            <div class="col-sm my-1 p-4">
                <div class="row">
                    <div>Tanner Sapaugh <span class="quinn-sm">Store Associate</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-tanner.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm txt-team mt-2">
                        Tanner is a lifelong dancer and is looking forward to pairing her passion for dance with her love of people! Tanner is in her third year dancing with local semi-professional company, Friendswood Contemporary Ballet. She has 7 younger siblings and is wonderful with children and has years of experience finding the right fit for every dancer.
                    </div>
                </div>
            </div>
            <div class="col-sm my-1 p-4">
                <div class="row">
                    <div>Christen Hellman <span class="quinn-sm">Director of Operations</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-christen.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm txt-team mt-2">
                        Christen dances only for fun and in the privacy of her kitchen BUT has a strong passion for the local arts and has grown to know it well over the past 4 years. She has a degree in Journalism and has worked in Project Management and Communication throughout her entire career. Christen loves sharing about everything going on at the store. It's easy to talk about what you love and believe in!
                    </div>
                </div>
            </div>
            <div class="col-sm my-1 p-4">
                <div class="row">
                    <div>Priscilla Wright <span class="quinn-sm">Store Associate</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-priscilla.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm txt-team mt-2">
                        Priscilla joined our team in 2022 as an Associate and has proven to have a passion for people and our dance community. She is currently in school working towards a Bachelor's degree and works part time at the store.
                    </div>
                </div>
            </div>
            <div class="col-sm my-1 p-4">
                <div class="row">
                    <div>Gaby Chacon <span class="quinn-sm">Seamstress</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-gaby.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm txt-team mt-2">
                        Gaby is a third generation seamstress and has been a Dance Mom for over 10 years!  Gaby has a degree in graphic design, and a passion for the arts and crafts.  She has been sewing dance costumes since 2011, starting with her own dancer and later expanding to competitive groups and solo artists. Gaby is gifted at collaborating with dancers to ensure that their creativity and personality shines through in each design.
                    </div>
                </div>
            </div>
            <div class="col-sm my-1 p-4">
                <div class="row">
                    <div>Melissa Juneau <span class="quinn-sm">Team/Group Sales</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-melissa.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm txt-team mt-2">
                        Melissa grew up dancing in the Friendswood area, starting at the age of three. After fifteen years of training, she went on to attend college at Sam Houston State University. After graduating in 2014, with a Bachelors of Fine Arts degree in Dance, she began dancing with the Psophonia Dance Company in Houston. Melissa is enthusiastic about retail and merchandising, having worked in the retail industry for years and is excited to be able to combine both of her passions at The Dance Boutique.
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('divider')

@endsection
