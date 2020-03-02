<!-- Header -->
<div class="header">
    <div class="container">
        <div class="flex-parent align-items-center">

        <!-- Mobile Toggle Button -->
        <button class="nav-icon-toggle d-lg-none" id="nav-icon-toggle" aria-label="Open side menu">
            <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
            </span>
        </button>
        <!-- end mobile toggle button -->

        <!-- Logo -->
        <a href="{{ route('index') }}" class="logo">
            <img class="logo__img" src="{{ asset('assets/img/logo.png')}}" alt="logo">
        </a>

        <!-- Search -->
        <div class="nav__mobile-search d-lg-none">
            <a href="#" class="nav__search-trigger">
                <i class="ui-search nav__search-trigger-icon"></i>
            </a>                
        </div>

        <!-- Search form -->
        <form role="search" method="get" class="nav__search-form d-lg-none" action="/results">
            <input type="search" name="query" class="nav__search-input" placeholder="Type &amp; Hit Enter">
            <i class="ui-close nav__search-close"></i>
        </form> 

        <!-- Ad Banner 728 -->
        <!-- <div class="header__ad text-center d-lg-block d-none">
            <a href="#">
                <img src="assets/img/blog/placeholder_leaderboard.jpg" alt="">
            </a>
        </div> -->

        </div>
    </div>
</div>
<!-- end header -->

<!-- Navigation -->
<header class="nav d-lg-block d-none">

    <div class="nav__holder">
        <div class="container relative">
            <div class="flex-parent">

                <!-- Search form -->
                <form role="search" method="get" class="nav__search-form" action="/results">
                    <input type="search" name="query" class="nav__search-input" id="nav__search-input" placeholder="Type &amp; Hit Enter">
                    <i class="ui-close nav__search-close" id="nav__search-close"></i>
                </form>            

                <!-- Nav-wrap -->
                <nav class="flex-child nav__wrap d-none d-lg-block">              
                    <ul class="nav__menu">

                        @foreach($menu_categories as $category)

                            <li><a href="{{ route('category.single', ['slug' => $category->slug ]) }}">{{ $category->name }}</a></li>

                        @endforeach

                    </ul>
                <!-- end menu -->
                </nav>
                <!-- end nav-wrap -->

                <!-- Nav Right -->
                <div class="nav__right nav--align-right d-none d-lg-flex">

                    <!-- Socials -->
                    <div class="nav__right-item socials nav__socials"> 
                        <a class="social social-facebook social--nobase" href="#" target="_blank" aria-label="facebook"><i class="ui-facebook"></i></a>
                        <a class="social social-twitter social--nobase" href="#" target="_blank" aria-label="twitter"><i class="ui-twitter"></i></a>
                        <a class="social social-google social--nobase" href="#" target="_blank" aria-label="google"><i class="ui-google"></i></a>
                        <a class="social social-youtube social--nobase" href="#" target="_blank" aria-label="youtube"><i class="ui-youtube"></i></a>
                    </div>

                    <!-- Subscribe -->
                    <!-- <div class="nav__right-item nav__subscribe"> -->
                        <!-- <a href="#" class="nav__subscribe-url" data-toggle="modal" data-target="#subscribe-modal">Subscribe</a> -->
                    <!-- </div> -->

                    <!-- Search -->
                    <div class="nav__right-item nav__search">
                        <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                            <i class="ui-search nav__search-trigger-icon"></i>
                        </a>                
                    </div>

                </div>
                <!-- end nav right -->  

            </div>
        <!-- end flex-parent -->
        </div>
    <!-- end container -->

    </div>
</header>
<!-- end navigation -->       