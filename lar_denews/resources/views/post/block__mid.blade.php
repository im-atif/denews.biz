<div class="media post-block m-b-xs-30">
    <a href="{{ route('post.single', ['slug' => $post->slug]) }}" class="align-self-center">
        <img class="m-r-xs-30" src="{{ $post->featured }}" alt="{{ $post->title }}">
    </a>
    <div class="media-body">
        <div class="post-cat-group m-b-xs-10">
            <a href="{{ route('category.single', ['slug' => $post->category->slug]) }}" class="post-cat cat-btn {{ $bgColors[$key] }}">{{ $post->category->name }}</a>
        </div>
        <h3 class="axil-post-title hover-line hover-line">
            <a href="{{ route('post.single', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
        </h3>
        <div class="post-metas">
            <ul class="list-inline">
                <li>By <a href="{{ route('user.single', ['slug' => $post->user->slug]) }}">{{ $post->user->name }}</a></li>
            </ul>
        </div>
    </div>
</div>