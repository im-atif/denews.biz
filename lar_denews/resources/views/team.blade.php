@extends('layouts.frontend')

@section('page-content')

    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="banner banner__default bg-grey-light-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="post-title-wrapper">
                        <h2 class="m-b-xs-0 axil-post-title hover-line">Our Team</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="axil-our-team section-gap">
        <div class="container">

            <p class="m-b-xs-30 big">Meet the amazing people who make papr possible through their energy, experience, <br>and dedication to pursuing our goals.</p>

            <div class="axil-team-grid-wrapper p-t-xs-10">
                @include('inc.team-members')
            </div>
        </div>
    </div>

    <div class="join-us section-gap-bottom">
        <div class="container">
            <div class="section-title text-center d-block">
                <h2 class="axil-title text-center m-b-xs-30">We Are Hiring</h2>
                <p>We are always looking for the right people to join our passionate team of dedicated people. To support papr growth,<br> we welcome highly motivated people.</p>
            </div>

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="axil-avaiable-positions p-t-xs-10">
                        <div class="axil-position-block">
                            <h3 class="axil-position-title">Senior Reporter</h3>
                            <a href="#!" class="btn btn-primary btn-nofill btn-small">APPLY HERE</a>
                        </div>

                        <div class="axil-position-block">
                            <h3 class="axil-position-title">Senior Enterprise Editor</h3>
                            <a href="#!" class="btn btn-primary btn-nofill btn-small">APPLY HERE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop