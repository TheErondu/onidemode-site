    <!-- footer style three start -->
    <div class="rts-footer-area-start ptb--100 bg-3 border-topbottom-h3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-area-three-main-wrapper social-jumpanimation">
                        <div class="footer-two-main-wrapper three">
                            <div class="single-wized left">
                                <a href="index.html" class="logo-area">
                                    <img src="{{ asset('assets/images/logo/ONIDEMODE.webp') }}" alt="">
                                </a>
                                <!-- social style two -->
                                <ul class="social-style-two-wrapper social-anim">
                                    <li><a class="counter__anim" href="{{ config('settings.facebook_page') }}"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a class="counter__anim" href="{{ config('settings.twitter_handle') }}"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li><a class="counter__anim" href="{{ config('settings.youtube_previous_episodes_link') }}"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                    <li><a class="counter__anim" href="{{ config('settings.linkedin_profile') }}"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                                <!-- social style two end -->
                            </div>
                            <div class="single-wized left-center">
                                <h6 class="title">Our Address</h6>
                                <div class="address">
                                    <a href="#">
                                        {{ config('settings.site_contact_address') }}
                                    </a>
                                </div>
                            </div>
                            <div class="single-wized right-center">
                                <h6 class="title">Contact</h6>
                                <div class="contact-call">
                                    <a href="tel:{{ config('settings.site_contact_phone') }}">{{ config('settings.site_contact_phone') }}
                                    </a>
                                    <a href="mailto:{{ config('settings.site_contact_email') }}">{{ config('settings.site_contact_email') }}
                                    </a>
                                </div>
                            </div>
                            <div class="single-wized right">
                                <h6 class="title">News Letter</h6>
                                <form action="#">
                                    <input type="email" placeholder="Enter your email address" required>
                                    <button><i class="fa-regular fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer style three end -->



    <!-- rts copyright area start -->
    <div class="rts-copyrighta-area border-topbottom-h3 ptb--30 bg-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-3">
                        <p>Copyright 2023. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts copyright area end -->
    @include('layouts.frontend.mobile-menu')
    <!-- search area start -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <!-- search area end -->
