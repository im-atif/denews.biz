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
					<li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
				</ol>
			</nav>
		</div>
	</div>

	<section class="banner banner__default bg-grey-light-three">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="author-details-block">
						<div class="media post-block post-block__mid m-b-xs-0">
							<a class="align-self-center">
								<img class="m-r-xs-30" src="{{ $user->profile->avatar }}" alt="author image">
								<div class="grad-overlay__transparent overlay-over"></div>
							</a>
							<div class="media-body">
								<h2 class="h4 m-b-xs-15">{{ $user->name }}</h2>
								<p class="hover-line"><a href="{{ $user->profile->web }}" target="_blank">{{ $user->profile->web }}</a></p>
								<p class="mid">{{ $user->profile->about }}</p>
								<div class="post-metas">
									<ul class="list-inline">
										<li><i class="fal fa-user-edit"></i>Total Post ({{ $user->posts->count() }})</li>
										<!-- <li><i class="fal fa-comment"></i>Comments (12)</li> -->
									</ul>
								</div>
								<div class="author-social-share">
									<ul class="social-share social-share__with-bg">
										<li><a href="{{ $user->profile->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="{{ $user->profile->twitter }}"><i class="fab fa-twitter"></i></a></li>
										<li><a href="{{ $user->profile->instagram }}"><i class="fab fa-instagram"></i></a></li>
										<li><a href="{{ $user->profile->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="random-posts section-gap">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8">
                    <main class="axil-content">
						
						<h2 class="h3 m-b-xs-40">Articles By {{ $user->name }}</h2>
						
						@php $posts = $user->posts()->orderBy('id', 'desc')->paginate(10) @endphp
                        @foreach($posts as $key => $post)

                        @include('post.block__mid--desc')

						@endforeach
						
						{{ $posts->links('vendor.pagination.default') }}
                        
                    </main>
                </div>
                
                <div class="col-lg-4">
					@php $largeAddBanner = true; @endphp
                    @include('inc.sidebar')
                </div>
            </div>
        </div>
    </div>

@stop