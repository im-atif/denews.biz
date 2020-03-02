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
                    <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="banner banner__default bg-grey-light-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="post-title-wrapper">
                        <h2 class="m-b-xs-0 axil-post-title hover-line">{{ $category->name }}</h2>
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
                        
                        @php $posts = $category->posts()->orderBy('id', 'desc')->paginate(10) @endphp
                        @foreach($posts as $key => $post)

                        @include('post.block__mid--desc')

                        @endforeach

                        {{ $posts->links('vendor.pagination.default') }}
                        
                    </main>
                </div>
                
                <div class="col-lg-4">
                    @include('inc.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('top_content')

	<h1 class="page-title h2">{{ $category->name }}</h1>

	<div class="row">

		@foreach($category->posts()->orderBy('created_at', 'desc')->get() as $post)

			<div class="col-md-6">
				<article class="entry">
					<div class="entry__img-holder">
						<a href="{{ route('post.single' , ['slug' => $post->slug ]) }}">
							<div class="thumb-container thumb-65">
								<img data-src="{{ $post->featured }}" src="{{ asset('img/empty.png') }}" class="entry__img lazyload" alt="{{ $post->title }}" />
							</div>
						</a>
					</div>
					<div class="entry__body">
						<div class="entry__header">
							<h2 class="entry__title entry__title--medium">
								<a href="{{ route('post.single' , ['slug' => $post->slug ]) }}">{{ $post->title }}</a>
							</h2>
							<ul class="entry__meta">
								<li class="entry__meta-author">
									<a href="{{ route('user.single', ['slug' => $post->user->slug]) }}">
										<span>by</span>
										<span class="entry__meta-author-name">{{ $post->user->name }}</span>
									</a>
								</li>
								<li class="entry__meta-date">{{ $post->created_at->toFormattedDateString() }}</li>
							</ul>
						</div>
					</div>
				</article>
			</div>

		@endforeach

	</div>

@stop