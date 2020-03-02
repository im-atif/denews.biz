<!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__widgets">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="widget">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" class="logo__img" alt="{{ $settings->site_name }}">
                        </a>
                        <p class="mt-20 mb-30">DeNews.biz is blogging website where you can read latest news about education, technology, latest fashion trends and lots more.</p>
                        <div class="socials">
                        <a href="#" target="_blank" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                        <a href="#" target="_blank" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                        <a href="#" target="_blank" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                        <a href="#" target="_blank" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                        <a href="#" target="_blank" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6">
                        <div class="widget donate">
                            <h4 class="widget-title">Instagram</h4>
                            <ul class="donate__list">
                                
                            </ul>
                        </div>
                    </div>            

                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">Useful Links</h4>
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog.html">Advertise</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>            

                </div>
            </div>    
        </div>
        <!-- end container -->

        <div class="footer__bottom">
            <div class="container text-center">
                <span class="copyright">&copy; 2018 {{ $settings->site_name }} | Created by <a href="http://dedezigners.com" target="_blank">DeDezigners</a></span>
            </div>
        </div>
        <!-- end bottom footer -->
    </footer>
<!-- end footer -->

    <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>