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


    <div class="recent-news-wrapper section-gap p-t-xs-15 p-t-sm-60">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6">
                    <div class="axil-latest-post">
                        @include('post.block__lrg')
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="axil-recent-news">
                        <div class="section-title d-flex m-b-xs-30">
                            <h2 class="axil-title">Recent News</h2>
                            <a href="#" class="btn-link ml-auto">ALL RECENT NEWS</a>
                        </div>

                        <div class="axil-content">
                            
                            @foreach($latest_four_posts as $key => $post)

                            @include('post.block__mid')

                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    

    <section class="section-gap section-gap-top__with-text top-stories bg-grey-light-three">
        <div class="container">
            <div class="section-title m-b-xs-40">
                <h2 class="axil-title">Top Stories</h2>
                <a href="#" class="btn-link">All Top Stories</a>
            </div>
            <div class="row">
                
                <div class="col-lg-8">
                    @include('post.block__abs')
                </div>

                <div class="col-lg-4">

                    @foreach($top_stories_posts as $key => $post)

                    @include('post.block__abs__sml')

                    @endforeach
                    
                </div>

            </div>
        </div>
    </section>
    

    <section class="section-gap section-gap-top__with-text trending-stories">
        <div class="container">
            <div class="section-title m-b-xs-40">
                <h2 class="axil-title">Trending Stories</h2>
                <a href="#" class="btn-link">ALL TRENDING STORIES</a>
            </div>
            <div class="row">
            
                @foreach($trending_posts as $key => $post)

                <div class="col-lg-6">
                    @include('post.block__mid')
                </div>

                @endforeach

            </div>
        </div>
    </section>
    

    <section class="axil-video-posts section-gap section-gap-top__with-text bg-grey-dark-one">
        <div class="container">
            <div class="section-title title-white m-b-xs-40">
                <h2 class="axil-title">Videos</h2>
                <a href="#" class="btn-link ml-auto">All VIDEOS</a>
            </div>
            <!-- End of .section-title -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="axil-img-container flex-height-container">
                        <a href="post-format-video.html" class="d-block h-100">
                            <img src="assets/images/video-post/video-post-latest.jpg" alt="video post"
                                class="w-100">
                            <div class="grad-overlay grad-overlay__transparent"></div>
                            <div class="video-popup video-play-btn video-play-btn__big"></div>
                        </a>
                        <div class="media post-block grad-overlay__transparent position-absolute m-b-xs-30">
                            <div class="media-body media-body__big">
                                <div class="axil-media-bottom mt-auto">
                                    <h3 class="axil-post-title hover-line hover-line"><a
                                            href="post-format-standard.html">Maui
                                            By Air The
                                            Best Way Around The
                                            Island</a></h3>
                                    <div class="post-metas">
                                        <ul class="list-inline">
                                            <li>By <a href="#" class="post-author">Ashley Graham</a></li>
                                            <li><i class="dot">.</i>July 23, 2019</li>
                                            <li><a href="#"><i class="feather icon-activity"></i>5k Views</a></li>
                                            <li><a href="#"><i class="feather icon-share-2"></i>230 Shares</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End of .media-body -->
                        </div>
                        <!-- End of .post-block -->
                    </div>
                    <!-- End of .axil-img-container -->
                </div>
                <!-- End of .col-lg-8 -->
                <div class="col-lg-4">
                    <div class="axil-content">
                        <div class="media post-block post-block__small post-block__on-dark-bg m-b-xs-30">
                            <a href="post-format-video.html" class="align-self-center">
                                <img class=" m-r-xs-30" src="assets/images/video-post/video-post-1.jpg" alt="">
                                <span class="video-play-btn video-play-btn__small"></span>
                            </a>
                            <div class="media-body">
                                <div class="post-cat-group">
                                    <a href="post-format-video.html" class="post-cat color-blue-three">BEAUTY</a>
                                </div>
                                <h3 class="axil-post-title hover-line hover-line"><a
                                        href="post-format-video.html">Stocking
                                        Your
                                        Restaurant Kitchen Finding
                                        Reliable
                                        Sellers</a></h3>
                                <div class="post-metas">
                                    <ul class="list-inline">
                                        <li>By <a href="#">Amachea Jajah</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of .post-block -->
                        <div class="media post-block post-block__small post-block__on-dark-bg m-b-xs-30">
                            <a href="post-format-video.html" class="align-self-center"><img class=" m-r-xs-30"
                                    src="assets/images/video-post/video-post-2.jpg" alt="">
                                <span class="video-play-btn video-play-btn__small"></span></a>
                            <div class="media-body">
                                <a href="post-format-video.html" class="post-cat color-green-three">TRAVEL</a>
                                <h3 class="axil-post-title hover-line hover-line"><a
                                        href="post-format-video.html">Trip To
                                        Iqaluit In
                                        Nunavut A Canadian
                                        Arctic
                                        City</a>
                                </h3>
                                <div class="post-metas">
                                    <ul class="list-inline">
                                        <li>By <a href="#">Xu Jianhong</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of .post-block -->
                        <div class="media post-block post-block__small post-block__on-dark-bg m-b-xs-30">
                            <a href="post-format-video.html" class="align-self-center"><img class=" m-r-xs-30"
                                    src="assets/images/video-post/video-post-3.jpg" alt="">
                                <span class="video-play-btn video-play-btn__small"></span></a>
                            <div class="media-body">
                                <a href="post-format-video.html" class="post-cat color-red-two">SPORTS</a>
                                <h3 class="axil-post-title hover-line hover-line"><a
                                        href="post-format-video.html">Get The Boot A Birds Eye Look Into Mcse
                                        Boot Camps</a></h3>
                                <div class="post-metas">
                                    <ul class="list-inline">
                                        <li>By <a href="#">Ahmad Nazeri</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of .post-block -->
                        <div class="media post-block post-block__small post-block__on-dark-bg m-b-xs-30">
                            <a href="post-format-video.html" class="align-self-center"><img class=" m-r-xs-30"
                                    src="assets/images/video-post/video-post-4.jpg" alt="">
                                <span class="video-play-btn video-play-btn__small"></span></a>
                            <div class="media-body">
                                <a href="post-format-video.html" class="post-cat color-blue-one">FASHION</a>
                                <h3 class="axil-post-title hover-line hover-line"><a
                                        href="post-format-video.html">To Keep
                                        Makeup
                                        Looking Fresh Take A
                                        Powder</a></h3>
                                <div class="post-metas">
                                    <ul class="list-inline">
                                        <li>By <a href="#">Sergio Pliego</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of .post-block -->
                    </div>
                    <!-- End of .axil-content -->
                </div>
                <!-- End of .col-lg-4 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
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

                        @foreach($random_posts as $key => $post)

                        @include('post.block__mid--desc')

                        @endforeach
                        
                    </main>
                </div>
                
                <div class="col-lg-4">
                    @include('inc.sidebar')
                </div>
            </div>
        </div>
    </div>


    <section class="related-post p-b-xs-30">
        <div class="container">
            <div class="section-title m-b-xs-40">
                <h2 class="axil-title">Food &amp; Drink</h2>
                <a href="#" class="btn-link ml-auto">All FOOD &amp; DRINK</a>
            </div>
            
            <div class="grid-wrapper">
                <div class="row">
                    @foreach($food->posts()->orderBy('id', 'desc')->take(4)->get() as $post)
                    
                    <div class="col-lg-3 col-md-4">
                        @include('post.block__content')
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection