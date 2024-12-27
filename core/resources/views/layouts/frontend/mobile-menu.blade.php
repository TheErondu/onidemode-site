<!-- header style two -->
<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="{{ asset('assets/images/logo/ONIDEMODE.webp') }}" alt="Innovate">
        </div>
        <div class="inner-content">
            <p class="disc">
                {{ config('settings.site_name', 'ONIDEMODE - Yoruba Essence, Culture Reimagined.') }}
            </p>
            <div class="contact-information--sidebar">
                <h6 class="title">Contact Info</h6>
                <div class="single-info">
                    <a href="#"> {{ config('settings.site_contact_phone') }}</a>
                </div>
                <div class="single-info">
                    <a href="#">{{ config('settings.site_contact_address') }}</a>
                </div>
                <div class="single-info">
                    <a href="#">{{ config('settings.site_contact_email') }}</a>
                </div>
                <div class="rts-social-style-one">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <h4 class="title">Want to reach out?</h4>
                <a href="{{ route('frontend.contact') }}" class="rts-btn btn-primary">Let's talk</a>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li>
                    <a href="{{ route('frontend.home') }}" class="main">Home</a>

                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">ONIDEMODE</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ route('frontend.participants.register') }}">Register as
                                a participant</a></li>
                        <li><a class="mobile-menu-link"
                                href="{{ config('settings.youtube_previous_episodes_link', 'https://www.youtube.com/@Awikonkotv/videos') }}">See
                                recent Episodes</a></li>

                    </ul>
                </li>
                <li>
                    <a href="{{ route('frontend.about') }}" class="main">About Us</a>
                </li>
                <li>
                    <a href="{{ route('frontend.meet-the-ceo') }}" class="main">Meet the CEO</a>
                </li>
                <li>
                    <a href="{{ route('frontend.contact') }}" class="main">Reach out</a>

                </li>
            </ul>
        </nav>

        <div class="rts-social-style-one pl--20 mt--100">
            <ul>
                <li>
                    <a href="{{ config('settings.facebook_page'),'' }}">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ config('settings.twitter_handle') }}">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ config('settings.youtube_previous_episodes_link') }}">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ config('settings.linkedin_profile') }}">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- header style two End -->
