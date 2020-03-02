@php
$color = [
    'color-blue-one',
    'color-blue-two',
    'color-blue-three',
    'color-yellow-one',
    'color-yellow-two',
    'color-yellow-three',
    'color-red-one',
    'color-red-two',
    'color-red-three',
    'color-green-one',
    'color-green-two',
    'color-green-three',
    'color-purple-one',
    'color-purple-two',
    'color-purple-three',
];
@endphp

<aside class="post-sidebar">

    @if(!isset($shortSidebar) || $shortSidebar === true)

    <div class="add-block-widget m-b-xs-40">
        <a href="#!"><img src="/assets/images/clientbanner/clientbanner2.jpg" alt="sidebar add" class="img-fluid"></a>
    </div>
    
    <div class="newsletter-widget weekly-newsletter bg-grey-light-three m-b-xs-40">
        <div class="newsletter-content">
            <div class="newsletter-icon"><i class="feather icon-send"></i></div>
            <div class="section-title">
                <h3 class="axil-title">Subscribe To Our Weekly Newsletter</h3>
                <p class="mid m-t-xs-10 m-b-xs-20">No spam, notifications only about new products, updates.</p>
            </div>
            <div class="subscription-form-wrapper">
                <form action="#" class="subscription-form">
                    <div class="form-group form-group-small m-b-xs-20">
                        <label for="subscription-email-2">Enter Email Address</label>
                        <input type="text" name="subscription-email-2" id="subscription-email-2">
                    </div>
                    <div class="m-b-xs-0">
                        <button class="btn btn-primary btn-small">SUBSCRIBE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endif

    <div class="category-widget m-b-xs-40">
        <div class="widget-title">
            <h3>Categories</h3>
            <div class="owl-nav">
                <button class="custom-owl-prev"><i class="feather icon-chevron-left"></i></button>
                <button class="custom-owl-next"><i class="feather icon-chevron-right"></i></button>
            </div>
        </div>
        <div class="category-carousel">
            <div class="owl-carousel owl-theme" data-owl-items="1" data-owl-loop="true"
                data-owl-autoplay="true" data-owl-dots="false" data-owl-nav="false"
                data-owl-margin="10">
                <div class="cat-carousel-inner">
                    <ul class="category-list-wrapper">

                        @foreach($first_4_cat as $key => $value)

                        <li class="category-list perfect-square">
                            <a
                            href="{{ route('category.single', ['slug' => $value->slug]) }}"
                            class="list-inner"
                            style="background-image: url(/uploads/category//category-bg-{{ ($key+1) }}.png)">
                                <div class="post-info-wrapper overlay">
                                    <div class="counter-inner"><span class="counter">{{ $value->posts->count() }}</span></div>
                                    <h4 class="cat-title">{{ $value->name }}</h4>
                                </div>
                            </a>
                        </li>
                        
                        @endforeach
                        
                    </ul>
                </div>
                <div class="cat-carousel-inner">
                    <ul class="category-list-wrapper">

                        @foreach($second_4_cat as $key => $value)

                        <li class="category-list perfect-square">
                            <a
                            href="{{ route('category.single', ['slug' => $value->slug]) }}"
                            class="list-inner"
                            style="background-image: url(/uploads/category/category-bg-{{ ($key+5) }}.jpg)">
                                <div class="post-info-wrapper overlay">
                                    <div class="counter-inner"><span class="counter">{{ $value->posts->count() }}</span></div>
                                    <h4 class="cat-title">{{ $value->name }}</h4>
                                </div>
                            </a>
                        </li>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="sidebar-social-share-widget m-b-xs-40">
        <ul class="social-share-list-wrapper">
            <li class="social-share-list text-center perfect-square">
                <a href="#" class="list-inner bg-color-facebook">
                    <i class="fab fa-facebook-f"></i>
                    <div class="counts">2000+</div>
                    <div class="title">Fans</div>
                </a>
            </li>
            <!-- End of .social-share-list -->
            <li class="social-share-list text-center perfect-square">
                <a href="#" class="list-inner bg-color-twitter">
                    <i class="fab fa-twitter"></i>
                    <div class="counts">4000+</div>
                    <div class="title">Followers</div>
                </a>
            </li>
            <!-- End of .social-share-list -->
            <li class="social-share-list text-center perfect-square">
                <a href="#" class="list-inner bg-color-youtube">
                    <i class="fab fa-youtube"></i>
                    <div class="counts">1M+</div>
                    <div class="title">Subscribers</div>
                </a>
            </li>
            <!-- End of .social-share-list -->
            <li class="social-share-list text-center perfect-square">
                <a href="#" class="list-inner bg-color-linkedin">
                    <i class="fab fa-linkedin-in"></i>
                    <div class="counts">600+</div>
                    <div class="title">Connections</div>
                </a>
            </li>
            <!-- End of .social-share-list -->
            <li class="social-share-list text-center perfect-square">
                <a href="#" class="list-inner bg-color-vimeo">
                    <i class="fab fa-vimeo"></i>
                    <div class="counts">500+</div>
                    <div class="title">Connections</div>
                </a>
            </li>
            <!-- End of .social-share-list -->
            <li class="social-share-list text-center perfect-square">
                <a href="#" class="list-inner bg-color-pinterest">
                    <i class="fab fa-pinterest"></i>
                    <div class="counts">600+</div>
                    <div class="title">Followers</div>
                </a>
            </li>
            <!-- End of .social-share-list -->
            <li class="social-share-list text-center perfect-square">
                <a href="#" class="list-inner bg-color-twitch">
                    <i class="fab fa-twitch"></i>
                    <div class="counts">1K+</div>
                    <div class="title">Followers</div>
                </a>
            </li>
            <!-- End of .social-share-list -->
            <li class="social-share-list text-center perfect-square">
                <a href="#" class="list-inner bg-color-instagram">
                    <i class="fab fa-instagram"></i>
                    <div class="counts">1K+</div>
                    <div class="title">Followers</div>
                </a>
            </li>
            <!-- End of .social-share-list -->
        </ul>
        <!-- End of .social-share-list-wrapper -->
    </div>
    
    <div class="post-widget sidebar-post-widget m-b-xs-40">
        <ul class="nav nav-pills row no-gutters">
            <li class="nav-item col">
                <a class="nav-link active" data-toggle="pill" href="#recent-post">Recent</a>
            </li>
            <li class="nav-item col">
                <a class="nav-link" data-toggle="pill" href="#popular-post">Popular</a>
            </li>
            <li class="nav-item col">
                <a class="nav-link" data-toggle="pill" href="#comments">Comments</a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade show active" id="recent-post">
                <div class="axil-content">
                    @foreach($recent_posts as $key => $post)

                    <div class="media post-block post-block__small">
                        <a href="{{ route('post.single', ['slug' => $post->slug]) }}" class="align-self-center">
                            <img class="m-r-xs-30" src="{{ $post->featured }}" alt="{{ $post->title }}">
                        </a>
                        <div class="media-body">
                            <div class="post-cat-group">
                                <a href="{{ route('category.single', ['slug' => $post->category->slug]) }}" class="post-cat {{ $color[rand(0, 14)] }}">{{ $post->category->name }}</a>
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

                    @endforeach
                </div>
            </div>
            
            <div class="tab-pane fade" id="popular-post">
                <div class="axil-content">
                    @foreach($popular_posts as $key => $post)

                    <div class="media post-block post-block__small">
                        <a href="{{ route('post.single', ['slug' => $post->slug]) }}" class="align-self-center">
                            <img class="m-r-xs-30" src="{{ $post->featured }}" alt="{{ $post->title }}">
                        </a>
                        <div class="media-body">
                            <div class="post-cat-group">
                                <a href="{{ route('category.single', ['slug' => $post->category->slug]) }}" class="post-cat {{ $color[rand(0, 14)] }}">{{ $post->category->name }}</a>
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

                    @endforeach
                </div>
            </div>

            <div class="tab-pane fade" id="comments">
                <div class="axil-content">
                    @foreach($comment_posts as $key => $post)

                    <div class="media post-block post-block__small">
                        <a href="{{ route('post.single', ['slug' => $post->slug]) }}" class="align-self-center">
                            <img class="m-r-xs-30" src="{{ $post->featured }}" alt="{{ $post->title }}">
                        </a>
                        <div class="media-body">
                            <div class="post-cat-group">
                                <a href="{{ route('category.single', ['slug' => $post->category->slug]) }}" class="post-cat {{ $color[rand(0, 14)] }}">{{ $post->category->name }}</a>
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

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    @if(!isset($shortSidebar) || $shortSidebar === true)

    <div class="instagram-widget m-b-xs-40">
        <div class="widget-title">
            <h3>Instagram</h3>
        </div>
        <div class="axil-content">
            <ul class="instagram-post-list-wrapper">
                <li class="instagram-post-list perfect-square">
                    <a href="#" class="list-inner"
                        style="background-image: url(/assets/images/instagram-post/instagram-post-1.jpg)">
                        <div class="post-info-wrapper overlay">
                            <div class="post-info">
                                <i class="feather icon-heart"></i>
                                20K+
                            </div>
                            <!-- End of .post-info -->
                            <div class="post-info">
                                <i class="feather icon-message-square"></i>
                                200+
                            </div>
                            <!-- End of .post-info -->
                        </div>
                        <!-- End of .post-info-wrapper overlay -->
                    </a>
                </li>
                <!-- End of .instagram-post-list -->
                <li class="instagram-post-list perfect-square">
                    <a href="#" class="list-inner"
                        style="background-image: url(/assets/images/instagram-post/instagram-post-2.jpg)">
                        <div class="post-info-wrapper overlay">
                            <div class="post-info">
                                <i class="feather icon-heart"></i>
                                20K+
                            </div>
                            <!-- End of .post-info -->
                            <div class="post-info">
                                <i class="feather icon-message-square"></i>
                                200+
                            </div>
                            <!-- End of .post-info -->
                        </div>
                        <!-- End of .post-info-wrapper overlay -->
                    </a>
                </li>
                <!-- End of .instagram-post-list -->
                <li class="instagram-post-list perfect-square">
                    <a href="#" class="list-inner"
                        style="background-image: url(/assets/images/instagram-post/instagram-post-3.jpg)">
                        <div class="post-info-wrapper overlay">
                            <div class="post-info">
                                <i class="feather icon-heart"></i>
                                20K+
                            </div>
                            <!-- End of .post-info -->
                            <div class="post-info">
                                <i class="feather icon-message-square"></i>
                                200+
                            </div>
                            <!-- End of .post-info -->
                        </div>
                        <!-- End of .post-info-wrapper overlay -->
                    </a>
                </li>
                <!-- End of .instagram-post-list -->
                <li class="instagram-post-list perfect-square">
                    <a href="#" class="list-inner"
                        style="background-image: url(/assets/images/instagram-post/instagram-post-4.jpg)">
                        <div class="post-info-wrapper overlay">
                            <div class="post-info">
                                <i class="feather icon-heart"></i>
                                20K+
                            </div>
                            <!-- End of .post-info -->
                            <div class="post-info">
                                <i class="feather icon-message-square"></i>
                                200+
                            </div>
                            <!-- End of .post-info -->
                        </div>
                        <!-- End of .post-info-wrapper overlay -->
                    </a>
                </li>
                <!-- End of .instagram-post-list -->
                <li class="instagram-post-list perfect-square">
                    <a href="#" class="list-inner"
                        style="background-image: url(/assets/images/instagram-post/instagram-post-5.jpg)">
                        <div class="post-info-wrapper overlay">
                            <div class="post-info">
                                <i class="feather icon-heart"></i>
                                20K+
                            </div>
                            <!-- End of .post-info -->
                            <div class="post-info">
                                <i class="feather icon-message-square"></i>
                                200+
                            </div>
                            <!-- End of .post-info -->
                        </div>
                        <!-- End of .post-info-wrapper overlay -->
                    </a>
                </li>
                <!-- End of .instagram-post-list -->
                <li class="instagram-post-list perfect-square">
                    <a href="#" class="list-inner"
                        style="background-image: url(/assets/images/instagram-post/instagram-post-6.jpg)">
                        <div class="post-info-wrapper overlay">
                            <div class="post-info">
                                <i class="feather icon-heart"></i>
                                20K+
                            </div>
                            <!-- End of .post-info -->
                            <div class="post-info">
                                <i class="feather icon-message-square"></i>
                                200+
                            </div>
                            <!-- End of .post-info -->
                        </div>
                        <!-- End of .post-info-wrapper overlay -->
                    </a>
                </li>
                <!-- End of .instagram-post-list -->
            </ul>
            <!-- End of .instagram-post-list-wrapper -->
            <div class="m-t-xs-20">
                <button class="btn btn-primary btn-small">FOLLOW US</button>
            </div>
        </div>
        <!-- End of .content -->
    </div>
    
    @endif

    @if(isset($largeAddBanner) && $largeAddBanner === true)

    <div class="add-block-widget m-b-xs-40">
        <a href="#">
            <!-- <img src="/assets/images/clientbanner/clientbanner3.jpg" alt="sidebar add" class="img-fluid"> -->
            <img src="/assets/images/clientbanner/sidebar-add.jpg" alt="sidebar add" class="img-fluid">
        </a>
    </div>
    @endif
</aside>