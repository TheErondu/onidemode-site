    <!-- header three area start -->
    <header class="header-three five nav-color-white" style="z-index: 11;">
        <a href="{{route('frontend.home')}}" class="logo-area">
            <img src="{{asset('assets/images/logo/ONIDEMODE.webp')}}" alt="">
        </a>
        <div class="header-right">
            <div class="nav-area-center">
                <nav class="navigation">
                    <ul class="parent-ul">
                        <li><a href="{{route('frontend.home')}}">Home</a></li>
                        <li class="has-dropdown">
                            <a class="nav-link" href="#">ONÍDÈMỌDÈ</a>
                            <ul class="submenu">
                                <li class="lim"><a class="sdm-main" href="{{route('frontend.participants.register')}}">Register as a participant</a></li>
                                <li class="lim"><a class="sdm-main" href="">Watch Previous Episodes</a></li>
                                </li>
                            </ul>
                        </li>
                        <li><a href="/about">About us</a></li>
                        <li><a href="/meet-the-ceo">Meet the CEO</a></li>
                        <li><a href="/contact">Reach out</a></li>
                    </ul>
                </nav>
            </div>
            <div class="action-area" id="menu-btn">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16"
                        fill="none">
                        <rect x="6" width="18" height="2" fill="#D9D9D9" />
                        <rect x="10" y="14" width="14" height="2" fill="#D9D9D9" />
                        <rect y="7" width="24" height="2" fill="#D9D9D9" />
                    </svg>
                </div>
                <span>Menu</span>
            </div>
        </div>
    </header>
    <!-- header three area end -->

