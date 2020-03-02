@php $title = "Page Not Found &mdash; Denews" @endphp
@extends('layouts.frontend')

@section('page-content')

    <div class="error-404-banner bg-grey-light-three">
        <div class="container">
            <div class="error-404-content text-center">
                <div class="txt-404 tilt-this">404</div>
                <div class="error-inner-content">
                    <h1 class="h1 m-b-xs-20 m-b-md-40">
                        Sorry, This Page Doesn't Exist.
                    </h1>
                    <a href="/" class="btn btn-primary">BACK TO HOMEPAGE</a>
                </div>
            </div>
        </div>
    </div>

@endsection