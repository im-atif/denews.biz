<div class="axil-img-container m-b-xs-30">
    <a href="{{ route('post.single', ['slug' => $post->slug]) }}" class="d-block">
        <img src="{{ $post->featured }}" alt="{{ $post->title }}" class="w-100">
        <div class="grad-overlay"></div>
    </a>
    <div class="media post-block position-absolute">
        <div class="media-body">
            <div class="post-cat-group m-b-xs-10">
                <a href="{{ route('category.single', ['slug' => $post->category->slug]) }}" class="post-cat cat-btn {{ $bgColors[($key+4)] }}">{{ $post->category->name }}</a>
            </div>
            <div class="axil-media-bottom">
                <h3 class="axil-post-title hover-line hover-line">
                    <a href="{{ route('post.single', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                </h3>
                <div class="post-metas">
                    <ul class="list-inline">
                        <li><a href="{{ route('user.single', ['slug' => $post->user->slug]) }}" class="d-flex align-items-center"><span>By {{ $post->user->name }}</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>