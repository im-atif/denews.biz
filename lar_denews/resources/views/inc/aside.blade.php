<!-- Sidebar -->
<aside class="col-lg-4 sidebar sidebar--right">

    <!-- Widget Crypto Rates -->
    <div class="widget widget-categories">
        <h4 class="widget-title">Top Categories</h4>
        <div class="categories-list" id="crypto-rates">
            
            @foreach($sidebar_categories as $category)

                <div>
                    <a href="{{ route('category.single', ['slug' => $category->slug ]) }}"><span class="categories-list__title">{{ $category->name }}</span></a>
                    <span class="categories-list__value">{{ '(' . $category->posts()->count() . ')' }}</span>
                </div>

            @endforeach
            
        </div>
    </div>

    <!-- Widget Popular Posts -->
    <div class="widget widget-popular-posts">
        <h4 class="widget-title">Popular Posts</h4>

        <ul class="widget-popular-posts__list">

            @foreach($top_three as $post)

                <li class="widget-popular-posts__item">
                    <article>
                        <div class="widget-popular-posts__entry">
                            <a href="{{ route('category.single', ['id' => $post->category->id ]) }}" class="entry__meta-category">{{ $post->category->name }}</a>
                            <h3 class="widget-popular-posts__entry-title">
                                <a href="{{ route('post.single', ['slug' => $post->slug ]) }}">{{ $post->title }}</a>
                            </h3>
                        </div>
                    </article>
                </li>

            @endforeach
        </ul>
    </div>
    <!-- end widget popular posts -->

    <!-- Widget Socials -->
    <div class="widget widget-socials">
        <div class="socials justify-content-center">
            <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook"><i class="ui-facebook"></i></a>
            <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter"><i class="ui-twitter"></i></a>
            <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google"><i class="ui-google"></i></a>
            <a class="social social-instagram" href="#" title="instagram" target="_blank" aria-label="instagram"><i class="ui-instagram"></i></a>
            <a class="social social-youtube" href="#" title="youtube" target="_blank" aria-label="youtube"><i class="ui-youtube"></i></a>
            <a class="social social-rss" href="#" title="rss" target="_blank" aria-label="rss"><i class="ui-rss"></i></a>
        </div>
    </div>
    <!-- end widget socials -->

    <!-- Widget Newsletter -->
    <!-- <div class="widget widget_mc4wp_form_widget">
        <h4 class="widget-title">Subscribe for News</h4>
        <form class="mc4wp-form" method="post">
            <div class="mc4wp-form-fields">
                <div class="form-group">
                    <i class="ui-email"></i>
                    <input type="email" name="EMAIL" placeholder="Your email" required="">
                </div>
                <input type="submit" class="btn btn-md btn-color" value="Subscribe">
            </div>
        </form>
    </div> -->
    <!-- end widget newsletter -->

    <!-- Widget Featured ICO's -->
    <div class="widget widget-featured-icos">
        <h4 class="widget-title">Tags</h4>
        <ul class="widget-featured-icos__list clearfix">
            @foreach($tags as $tag)
                <a href="{{ route('tag.single', ['slug' => $tag->slug]) }}">{{ $tag->tag }}</a>
            @endforeach
        </ul>
    </div>
    <!-- end widget featured icos -->

</aside>
<!-- end sidebar -->