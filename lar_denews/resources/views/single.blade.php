@extends('layouts.frontend')

@section('page-content')

	<div class="breadcrumb-wrapper">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item"><a href="{{ route('category.single', ['slug' => $post->category->slug]) }}">{{ $post->category->name }}</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
				</ol>
			</nav>
		</div>
	</div>

	<section class="banner banner__single-post banner__standard">
		<div class="container">
			<div class="row align-items-center">
				
				<div class="col-lg-6">
					<div class="post-title-wrapper">
						<div class="btn-group">
							<a href="{{ route('category.single', ['slug' => $post->category->slug]) }}" class="cat-btn text-uppercase bg-color-blue-one">{{ $post->category->name }}</a>
						</div>

						<h2 class="m-t-xs-20 m-b-xs-0 axil-post-title hover-line">{{ $post->title }}</h2>
						<div class="post-metas banner-post-metas m-t-xs-20">
							<ul class="list-inline">
								<li><a href="{{ route('user.single', ['slug' => $post->user->slug]) }}" class="post-author post-author-with-img"><img src="{{  $post->user->profile->avatar }}" alt="author">{{ $post->user->name }}</a></li>
								<li><i class="feather icon-activity"></i>5k Views</li>
								<li><i class="feather icon-share-2"></i>230 Shares</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<img src="{{ $post->featured }}" alt="" class="img-fluid" width="600" height="600">
				</div>
			</div>
		</div>
	</section>

	<div class="post-single-wrapper p-t-xs-60">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-8">
					<main class="site-main">
						<article class="post-details">
							<div class="single-blog-wrapper">

								<div class="post-details__social-share mt-2">
									<ul class="social-share social-share__with-bg social-share__vertical">
										<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#!"><i class="fab fa-behance"></i></a></li>
										<li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>

								<div class="add-container m-b-xs-60">
									<a href="#"><img src="/assets/images/clientbanner/clientbanner.jpg" alt="add one" class="img-fluid"></a>
								</div>

								{!! $post->content !!}

								<ul class="masonry-grid gallery">
									<li class="grid-item col-lg-4">
										<figure><img src="/uploads/single-masonry-gallery/gallery-1.png" alt="" class="img-fluid w-100"></figure>
									</li>
									<li class="grid-item col-lg-4">
										<figure><img src="/uploads/single-masonry-gallery/gallery-2.png" alt="" class="img-fluid w-100"></figure>
									</li>
									<li class="grid-item col-lg-4">
										<figure><img src="/uploads/single-masonry-gallery/gallery-3.png" alt="" class="img-fluid w-100"></figure>
									</li>
									<li class="grid-item col-lg-4">
										<figure><img src="/uploads/single-masonry-gallery/gallery-4.png" alt="" class="img-fluid w-100"></figure>
									</li>
								</ul>
							</div>
						</article>

						<div class="post-shares m-t-xs-60">
							<div class="title">SHARE:</div>
							<ul class="social-share social-share__rectangular">
								<li><a href="#!" class="btn bg-color-twitch"><i class="fab fa-twitch"></i>1K+</a></li>
								<li><a href="#!" class="btn bg-color-facebook"><i class="fab fa-facebook-f"></i>1K+</a></li>
								<li><a href="#!" class="btn bg-color-twitter"><i class="fab fa-twitter"></i>1000+</a></li>
								<li><a href="#!" class="btn bg-color-linkedin"><i class="fab fa-linkedin-in"></i>1M+</a></li>
							</ul>
						</div>

						<hr class="m-t-xs-50 m-b-xs-60">
						
						
						<div class="about-author m-b-xs-60">
							<div class="media">
								<a href="{{ route('user.single', ['slug' => $post->user->slug]) }}">
									<img class="author-img" src="{{ $post->user->profile->avatar }}" alt="{{ $post->user->name }}">
								</a>
								<div class="media-body">
									<div class="media-body-title">
										<h3><a href="{{ route('user.single', ['slug' => $post->user->slug]) }}">{{ $post->user->name }}</a></h3>
									</div>

									<div class="media-body-content">
										<p>{{ $post->user->profile->about }}</p>

										<ul class="social-share social-share__with-bg">
											<li><a href="{{ $post->user->profile->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="{{ $post->user->profile->twitter }}"><i class="fab fa-twitter"></i></a></li>
											<li><a href="{{ $post->user->profile->instagram }}"><i class="fab fa-instagram"></i></a></li>
											<li><a href="{{ $post->user->profile->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<hr class="m-t-xs-50 m-b-xs-60">

						<div class="post-navigation-wrapper row  m-b-xs-60">

							@if($prev)

							<div class="post-navigation col-lg-6">
								<div class="post-nav-content">
									<a href="{{ route('post.single', ['slug' => $prev->slug]) }}" class="prev-post"><i class="feather icon-chevron-left"></i>Previous Post</a>
									<h3><a href="{{ route('post.single', ['slug' => $prev->slug]) }}">{{ $prev->title }}</a></h3>
								</div>
							</div>

							@endif
							
							@if($next)

							<div class="post-navigation text-right col-lg-6">
								<div class="post-nav-content">
									<a href="{{ route('post.single', ['slug' => $next->slug]) }}" class="next-post">Next Post<i class="feather icon-chevron-right"></i></a>
									<h3><a href="{{ route('post.single', ['slug' => $next->slug]) }}">{{ $next->title }}</a></h3>
								</div>
							</div>

							@endif
						</div>
					</main>
				</div>

				<div class="col-lg-4">
					@php $largeAddBanner = true; @endphp
					@include('inc.sidebar')
				</div>

			</div>
		</div>
	</div>

@endsection