@extends('layouts.frontend')

@section('top_content')

	<h1 class="page-title h2">{{ $s_tag->tag }}</h1>

	<div class="row">

		@foreach($s_tag->posts()->orderBy('created_at', 'desc')->get() as $post)

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