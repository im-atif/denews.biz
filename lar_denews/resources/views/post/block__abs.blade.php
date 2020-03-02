<div class="axil-img-container m-b-xs-30">
    <a href="{{ route('post.single', ['slug' => $top_stories_post->slug]) }}" class="d-block">
        <img src="{{ $top_stories_post->featured }}" alt="{{ $top_stories_post->title }}" class="w-100">
        <div class="grad-overlay"></div>
    </a>
    <div class="media post-block position-absolute">
        <div class="media-body media-body__big">
            <div class="post-cat-group m-b-xs-10">
                <a href="{{ route('category.single', ['slug' => $top_stories_post->category->slug]) }}" class="post-cat cat-btn bg-color-blue-one">{{ $top_stories_post->category->name }}</a>
            </div>
            <div class="axil-media-bottom">
                <h3 class="axil-post-title hover-line hover-line">
                    <a href="{{ route('post.single', ['slug' => $top_stories_post->slug]) }}">{{ $top_stories_post->title }}</a>
                </h3>
                <div class="post-metas">
                    <ul class="list-inline">
                        <li>By <a href="{{ route('user.single', ['slug' => $top_stories_post->user->slug]) }}" class="post-author">{{ $top_stories_post->user->name }}</a></li>
                        <li><i class="dot">.</i>{{ date('M d, Y', strtotime($top_stories_post->created_at)) }}</li>
                        <li><i class="feather icon-activity"></i>5k Views</li>
                        <li><i class="feather icon-share-2"></i>230 Shares</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>