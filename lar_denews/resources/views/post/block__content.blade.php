<div class="content-block m-b-xs-30">
    <a href="{{ route('post.single', ['slug' => $post->slug]) }}">
        <img src="{{ $post->featured }}" alt="{{ $post->title }}" class="img-fluid">
        <div class="grad-overlay"></div>
    </a>
    <div class="media-caption">
        <div class="caption-content">
            <h3 class="axil-post-title hover-line hover-line">
                <a href="{{ route('post.single', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
            </h3>
            <div class="caption-meta">
                By <a href="{{ route('user.single', ['slug' => $post->user->slug]) }}">{{ $post->user->name }}</a>
            </div>
        </div>
    </div>
</div>