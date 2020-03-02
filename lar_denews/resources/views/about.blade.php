@extends('layouts.frontend')

@section('page-content')

    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="banner banner__default bg-grey-light-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="post-title-wrapper">
                        <h2 class="m-b-xs-0 axil-post-title hover-line">About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="axil-about-us section-gap-top p-b-xs-20">
        <div class="container">

            <figure class="m-b-xs-40">
                <img src="/assets/images/about-us.jpg" alt="about us" class="img-fluid mx-auto">
            </figure>

            <div class="row">
                <div class="col-lg-8">
                    <h2 class="axil-title">The Professional Publishing Platform</h2>

                    <p>Aenean consectetur massa quis sem volutpat, a condimentum tortor pretium. Cras id ligula consequat, sagittis nulla at, sollicitudin lorem. Orci varius natoque penatibus et magnis dis parturient montes.</p>
                    <p>Cras id ligula consequat, sagittis nulla at, sollicitudin lorem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus eleifend, dolor vel condimentum imperdiet. </p>

                    <p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that's filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a random text copied from a newspaper or the internet. The are likely to focus on the text, disregarding the layout and its elements.</p>

                    <h3 class="h4 m-t-lg-40">Our Growing News Network</h3>

                    <p>Cicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally the first Oration against Catiline is taken for type specimens: Quo usque tandem abutere, Catilina, patientia nostra? Quam diu etiam furor iste tuus nos eludet? (How long, O Catiline, will you abuse our patience? And for how long will that madness of yours mock us?)</p>

                    <p>Most text editors like MS Word or Lotus Notes generate random lorem text when needed, either as pre-installed module or plug-in to be added. Word selection or sequence don't necessarily match the original, which is intended to add variety.</p>

                    <h3 class="h4 m-t-lg-40">The Professional Publishing Platform</h3>

                    <p>Cicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally the first Oration against Catiline is taken for type specimens: Quo usque tandem abutere, Catilina, patientia nostra? Quam diu etiam furor iste tuus nos eludet? (How long, O Catiline, will you abuse our patience? And for how long will that madness of yours mock us?)</p>
                    
                    <p>Most text editors like MS Word or Lotus Notes generate random lorem text when needed, either as pre-installed module or plug-in to be added. Word selection or sequence don't necessarily match the original, which is intended to add variety.</p>
                </div>

                <div class="col-lg-4">
                    @php $shortSidebar = false; @endphp
                    @include('inc.sidebar')
                </div>
            </div>
        </div>
    </div>

    <div class="axil-our-team section-gap section-gap-top__with-text bg-grey-light-three">
        <div class="container">
            <div class="axil-team-grid-wrapper">
                
                <div class="section-title d-block text-center">
                    <h2 class="axil-title m-b-xs-20">Meet Our Publishing Authors</h2>
                    <p>Wherever &amp; whenever you need us. We are here for you - contact us for all your support needs, <br>be it technical, general queries or information support.</p>
                </div>
                
                @include('inc.team-members')
                
            </div>
        </div>
    </div>

@stop