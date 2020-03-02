<div class="media post-block m-b-xs-20">
    <figure class="fig-container">
        <a href="{{ route('post.single', ['slug' => $latest_post->slug]) }}">
            <img src="{{ $latest_post->featured }}" alt="{{ $latest_post->title }}">
        </a>
        <div class="post-cat-group m-b-xs-10">
            <a href="{{ route('category.single', ['slug' => $latest_post->category->slug]) }}" class="post-cat cat-btn bg-color-blue-one">{{ $latest_post->category->name }}</a>
        </div>
    </figure>
    <div class="media-body">
        <h3 class="axil-post-title hover-line hover-line">
            <a href="{{ route('post.single', ['slug' => $latest_post->slug]) }}">{{ $latest_post->title }}</a>
        </h3>
        <div class="post-metas">
            <ul class="list-inline">
                <li>By <a href="{{ route('user.single', ['slug' => $latest_post->user->slug]) }}" class="post-author">{{ $latest_post->user->name }}</a></li>
                <li><i class="dot">.</i>{{ date('M d, Y', strtotime($latest_post->created_at)) }}</li>
                <li><i class="feather icon-activity"></i>5k Views</li>
                <li><i class="feather icon-share-2"></i>230 Shares</li>
            </ul>
        </div>
    </div>
</div>