

    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="{{asset('assets/images/logo/ONIDEMODE.webp')}}" alt="Innovate">
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
                    <a href="{{route('frontend.contact')}}" class="rts-btn btn-primary">Let's talk</a>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="#" class="main">Home</a>
                        <ul class="submenu mm-collapse">
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Multipages</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="index.html"></a>Home One</li>
                                    <li><a href="index-two.html"></a>Home Two</li>
                                    <li><a href="index-three.html"></a>Home Three</li>
                                    <li><a href="index-four.html"></a>Home Four</li>
                                    <li><a href="index-five.html"></a>Home Five</li>
                                    <li><a href="index-six.html"></a>Home Six</li>
                                    <li><a href="index-seven.html"></a>Home Seven</li>
                                </ul>
                            </li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Onepages</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="onepage.html"></a>One Page One</li>
                                    <li><a href="onepage-two.html"></a>One Page Two</li>
                                    <li><a href="onepage-three.html"></a>One Page Three</li>
                                    <li><a href="onepage-four.html"></a>One Page Four</li>
                                    <li><a href="onepage-five.html"></a>One Page Five</li>
                                    <li><a href="onepage-six.html"></a>One Page Six</li>
                                    <li><a href="onepage-seven.html"></a>One Page Seven</li>
                                </ul>
                            </li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Showcase Pages</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="portfolio-boxes.html"></a>Carousel Slider</li>
                                    <li><a href="varticle-portfolio.html"></a>Vertical Portfolio</li>
                                    <li><a href="varticle-slider.html"></a>Varticl Slider</li>
                                    <li><a href="varticle-slider-tab.html"></a>Vartical Tab Slider</li>
                                    <li><a href="showcase-fade.html"></a>Showcase Fade</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Services</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="service-1.html">Service One</a></li>
                            <li><a class="mobile-menu-link" href="service-2.html">Service Two</a></li>
                            <li><a class="mobile-menu-link" href="service-3.html">Service Three</a></li>
                            <li><a class="mobile-menu-link" href="service-4.html">Service Four</a></li>
                            <li><a class="mobile-menu-link" href="service-5.html">Service Five</a></li>
                            <li><a class="mobile-menu-link" href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Portfolio</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="portfolio-grid-1.html">Portfolio Grid</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-grid-col-3.html">Portfolio Col-3</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-grid-col-4.html">Portfolio Col-4</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-varticle-grid.html">Portfolio Mesonary</a>
                            </li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Project Details</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="project-details-1.html"></a>Project Details v.1</li>
                                    <li><a href="project-details-2.html"></a>Project Details v.2</li>
                                    <li><a href="project-details-3.html"></a>Project Details v.3</li>
                                    <li><a href="project-details-4.html"></a>Project Details v.4</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Blog</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="blog.html">Blog</a></li>
                            <li><a class="mobile-menu-link" href="blog-list.html">Blog List</a></li>
                            <li><a class="mobile-menu-link" href="blog-2.html">Blog v.2</a></li>
                            <li><a class="mobile-menu-link" href="blog-3.html">Blog v.3</a></li>
                            <li><a class="mobile-menu-link" href="blog-4.html">Blog v.4</a></li>
                            <li><a class="mobile-menu-link" href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Pages</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="about.html">About</a></li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Team</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="team-1.html"></a>Team One</li>
                                    <li><a href="team-2.html"></a>Team Two</li>
                                    <li><a href="team-details.html"></a>Team Details</li>
                                </ul>
                            </li>
                            <li><a class="mobile-menu-link" href="before-after.html">Before After</a></li>
                            <li><a class="mobile-menu-link" href="pricing-plane.html">Pricing Plan</a></li>
                            <li><a class="mobile-menu-link" href="faq.html">Faq's</a></li>
                            <li><a class="mobile-menu-link" href="terms-and-condition.html">Terms & Conditions</a></li>
                            <li><a class="mobile-menu-link" href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a class="mobile-menu-link" href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html" class="main">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="rts-social-style-one pl--20 mt--100">
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
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->
