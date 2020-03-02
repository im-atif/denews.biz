@extends('layouts.frontend')

@section('page-content')

	@php
        $bgColors = [
            'bg-color-purple-one',
            'bg-color-purple-two',
            'bg-color-green-one',
            'bg-color-green-two',
            'bg-color-green-three',
            'bg-color-blue-one',
            'bg-color-blue-two',
            'bg-color-blue-three',
            'bg-color-blue-four',
            'bg-color-red-one',
            'bg-color-red-two',
            'bg-color-yellow-one',
            'bg-color-yellow-two',
            'bg-color-blue-grey-one',
            'bg-color-twitch',
            'bg-color-vimeo',
            'bg-color-pinterest',
            'bg-color-linkedin',
            'bg-color-youtube',
            'bg-color-instagram',
            'bg-color-twitter',
            'bg-color-facebook',
            'bg-color-info',
            'bg-color-warning',
            'bg-color-danger',
            'bg-color-success'
        ];
	@endphp
	
	<div class="breadcrumb-wrapper">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{ 'Search' }}</li>
				</ol>
			</nav>
		</div>
	</div>

	<section class="banner banner__default bg-grey-light-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="post-title-wrapper">
                        <h2 class="m-b-xs-0 axil-post-title hover-line">{{ $search }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<div class="random-posts section-gap">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8">
                    <div class="add-container m-b-xs-60">
                        <a href="#">
                            <img src="/assets/images/clientbanner/clientbanner.jpg" alt="add one" class="img-fluid">
                        </a>
                    </div>

                    <main class="axil-content">
						<h2 class="h3 m-b-xs-40">Search result for <span class="text-success">{{ $search }}</span> are ({{ $posts->total() }})</h2>

						@if ($posts->count() > 0)

                        @foreach($posts as $key => $post)

                        @include('post.block__mid--desc')

                        @endforeach

						{{ $posts->links('vendor.pagination.default') }}
						
						@else

						<h4 class="h4 m-b-xs-40">No post found :(</h4>

						@endif
                        
                    </main>
                </div>
                
                <div class="col-lg-4">
                    @include('inc.sidebar')
                </div>
            </div>
        </div>
    </div>
@stop