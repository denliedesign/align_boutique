@extends('layouts.app')
@section('content')

    <div class="container">
        <h2 class="quinn text-center my-4">The Store</h2>
        <div class="row">
            <div class="col-sm-5 d-flex align-items-center">
                Our team at The
                Dance Boutique has been deeply
                embedded in the dance community for
                years; having danced at our local studios,
                performed at these venues, and been
                Dance Moms ourselves. We are
                knowledgeable about our products AND
                your needs because we've been there!
                Each customer is someone we are hoping
                will return to the store year after year as
                their dancer develops their passion for the
                arts.
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
            Our team at The Dance Boutique has been deeply embedded in the dance community for years; having
            danced at our local studios, performed at these venues, and been Dance Moms ourselves. We are
            knowledgeable about our products AND your needs because we've been there! Each customer is someone
            we are hoping will return to the store year after year as their dancer develops their passion for the arts.
        </p>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            <div class="col-sm my-1">
                <div class="row">
                    <div>Dominique George <span class="quinn-sm">Store Manager</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-dominique.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm">
                        Dominique studied dance, music and acting in Louisiana and has a BFA in Performing Arts with a concentration in Dance from University of Louisiana. She also danced with Ad Deum II in Fall 2019 through Spring 2020 and is the current Assistant Director for Friendswood Contemporary Ballet. Dominique has previous experience in dance wear retail and is happy to be supporting our local dance community through her role at The Dance Boutique.
                    </div>
                </div>
            </div>
            <div class="col-sm my-1">
                <div class="row">
                    <div>Shanika Williams <span class="quinn-sm">Assistant Store Manager</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-shanika.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm">
                        Shanika is a Drill Team Dance Mom herself and has been in the shoes of many of our customers. She brings with her, years of experience in customer service and store management from Mac Cosmetics. Shanika's attention to detail and passion for helping our customers find exactly what they're looking for makes her the perfect fit.
                    </div>
                </div>
            </div>
            <div class="col-sm my-1">
                <div class="row">
                    <div>Tanner Sapaugh <span class="quinn-sm">Store Associate</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-tanner.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm">
                        Tanner is a lifelong dancer and is looking forward to pairing her passion for dance with her love of people! Tanner is in her third year dancing with local semi-professional company, Friendswood Contemporary Ballet. She has 7 younger siblings and is wonderful with children and has years of experience finding the right fit for every dancer.
                    </div>
                </div>
            </div>
            <div class="col-sm my-1">
                <div class="row">
                    <div>Christen Hellman <span class="quinn-sm">Director of Operations</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-christen.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm">
                        Christen dances only for fun and in the privacy of her kitchen BUT has a strong passion for the local arts and has grown to know it well over the past 4 years. She has a degree in Journalism and has worked in Project Management and Communication throughout her entire career. Christen loves sharing about everything going on at the store. It's easy to talk about what you love and believe in!
                    </div>
                </div>
            </div>
            <div class="col-sm my-1">
                <div class="row">
                    <div>Priscilla Wright <span class="quinn-sm">Store Associate</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-priscilla.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm">
                        Priscilla joined our team in 2022 as an Associate and has proven to have a passion for people and our dance community. She is currently in school working towards a Bachelor's degree and works part time at the store.
                    </div>
                </div>
            </div>
            <div class="col-sm my-1">
                <div class="row">
                    <div>Gaby Chacon <span class="quinn-sm">Seamstress</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-gaby.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm">
                        Gaby is a third generation seamstress and has been a Dance Mom for over 10 years!  Gaby has a degree in graphic design, and a passion for the arts and crafts.  She has been sewing dance costumes since 2011, starting with her own dancer and later expanding to competitive groups and solo artists. Gaby is gifted at collaborating with dancers to ensure that their creativity and personality shines through in each design.
                    </div>
                </div>
            </div>
            <div class="col-sm my-1">
                <div class="row">
                    <div>Melissa Juneau <span class="quinn-sm">Team/Group Sales</span></div>
                    <div class="col-sm" style="position: relative;"><img src="/images/team-melissa.png" alt="team member" class="img-fluid shadow rounded"><div id="img-border-team"></div></div>
                    <div class="col-sm">
                        Melissa grew up dancing in the Friendswood area, starting at the age of three. After fifteen years of training, she went on to attend college at Sam Houston State University. After graduating in 2014, with a Bachelors of Fine Arts degree in Dance, she began dancing with the Psophonia Dance Company in Houston. Melissa is enthusiastic about retail and merchandising, having worked in the retail industry for years and is excited to be able to combine both of her passions at The Dance Boutique.
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('divider')

@endsection
