@extends('layouts.frontend.app')
@section('content')
    <!-- rts banner area start -->
    <div class="rts-banner-area rts-section-gap bg_banner-4 bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content-wrapper-4">
                        <h1 class="title rts_hero__title">{{$data->sections[0]->title}}</h1>
                        <p class="disc">
                            {{$data->sections[0]->description}}
                        </p>
                        <a href="Portfolio-grid-col-5.html" class="rts-btn btn-border radious">{{$data->sections[0]->cta->text}}<i
                                class="fa-thin fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-image-bottom rts-reveal-one">
            <img class="rts-reveal-image-one" src="{{$data->sections[0]->images[0]->src}}" alt="">
        </div>
        <div class="left-image-center rts-reveal-one">
            <img class="rts-reveal-image-one" src="{{$data->sections[0]->images[1]->src}}" alt="">
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- about area -->
    <div class="rts-about-area-three rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- about left area start home three -->
                    <div class="about-left-three-start">
                        <div class="title-style-three-left">
                            <span>{{$data->sections[1]->title}}</span>
                            <h2 class="title">Yoruba Essence, <br>
                                <span>Culture</span> Reimagined.
                            </h2>
                        </div>
                        <p class="disc">
                            {{$data->sections[1]->description}}


                        </p>
                        <a href="{{$data->sections[0]->cta->link}}" class="rts-btn btn-border radious-3">{{$data->sections[1]->cta->text}}<i
                                class="fa-thin fa-arrow-right"></i></a>
                    </div>
                    <!-- about left area start home three end -->
                </div>
                <div class="col-lg-6 mt_md--50 mt_sm--50">
                    <!-- about style six -->
                    <div class="about-style-three-right">
                        <img src=" {{$data->sections[1]->image}}" alt="about">
                    </div>
                    <!-- about style six end -->
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->



    <!-- team area start -->
    <div class="rts-team-area rts-section-gapBottom pt--50 bg-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-team-revel text-center end">Meet the <span>Host</span> </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- team astyle three main wrapper -->
                    <div class="team-style-three-wrapper">
                        <!-- single team style start -->
                        <div class="team-single-three-style">
                            <a href="team-single.html" class="name-team">
                                <span>01</span>
                                {{$data->sections[2]->members[0]->name}}
                            </a>
                            <span class="designation"> {{$data->sections[2]->members[0]->designation}}</span>
                            <div class="social-team-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <a href="team-single.html"><i class="fa-solid fa-arrow-down-right"></i></a>
                            <div class="rts-hover-show-img">
                                <img src="{{$data->sections[2]->members[0]->image}}" alt="Thumb">
                            </div>
                        </div>
                        <!-- single team style end -->
                        <!-- single team style start -->
                        {{-- <div class="team-single-three-style">
                            <a href="team-single.html" class="name-team">
                                <span>02</span>
                                David Leo
                            </a>
                            <span class="designation">Interior Designer</span>
                            <div class="social-team-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <a href="team-single.html"><i class="fa-solid fa-arrow-down-right"></i></a>
                            <div class="rts-hover-show-img">
                                <img src="assets/images/team/02.jpg" alt="Thumb">
                            </div>
                        </div>
                        <!-- single team style end -->
                        <!-- single team style start -->
                        <div class="team-single-three-style">
                            <a href="team-single.html" class="name-team">
                                <span>03</span>
                                Eleanor
                            </a>
                            <span class="designation">Interior Designer</span>
                            <div class="social-team-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <a href="team-single.html"><i class="fa-solid fa-arrow-down-right"></i></a>
                            <div class="rts-hover-show-img">
                                <img src="assets/images/team/04.jpg" alt="Thumb">
                            </div>
                        </div>
                        <!-- single team style end -->
                        <!-- single team style start -->
                        <div class="team-single-three-style">
                            <a href="team-single.html" class="name-team">
                                <span>04</span>
                                Alexander
                            </a>
                            <span class="designation">Interior Designer</span>
                            <div class="social-team-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <a href="team-single.html"><i class="fa-solid fa-arrow-down-right"></i></a>
                            <div class="rts-hover-show-img">
                                <img src="assets/images/team/03.jpg" alt="Thumb">
                            </div>
                        </div>
                        <!-- single team style end -->
                        <!-- single team style start -->
                        <div class="team-single-three-style">
                            <a href="team-single.html" class="name-team">
                                <span>05</span>
                                jon jones
                            </a>
                            <span class="designation">Interior Designer</span>
                            <div class="social-team-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <a href="team-single.html"><i class="fa-solid fa-arrow-down-right"></i></a>
                            <div class="rts-hover-show-img">
                                <img src="assets/images/team/02.jpg" alt="Thumb">
                            </div>
                        </div> --}}
                        <!-- single team style end -->
                    </div>
                    <!-- team astyle three main wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- team area end -->

    {{-- <!-- rts- blog area start -->
    <div class="rts-blog-area rts-section-gapBottom bg-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-three-left border-bottom-blog">
                        <span>Recent Updates</span>
                        <h3 class="title-sm">
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--40 rts-slide-up">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="blog-style-three">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="assets/images/blog/04.jpg" alt="blog">
                        </a>
                        <div class="body-information">
                            <div class="blog-top">
                                <span class="tag">Architecture </span>
                                <span>08 Jun, 2023</span>
                            </div>
                            <a href="blog-details.html">
                                <h2 class="title">The Retro Furniture Set
                                    That’s Like But Better</h2>
                            </a>
                            <p class="disc">
                                we are passionate about creating your exceptional interior the way you live.
                            </p>
                            <a href="blog-details.html" class="btn-read-more-blog">Read More <i
                                    class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="blog-style-three">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="assets/images/blog/05.jpg" alt="blog">
                        </a>
                        <div class="body-information">
                            <div class="blog-top">
                                <span class="tag">Architecture </span>
                                <span>08 Jun, 2023</span>
                            </div>
                            <a href="blog-details.html">
                                <h2 class="title">How Much Does Interior
                                    Designer Cost in 2023?</h2>
                            </a>
                            <p class="disc">
                                we are passionate about creating your exceptional interior the way you live.
                            </p>
                            <a href="blog-details.html" class="btn-read-more-blog">Read More <i
                                    class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts- blog area end --> --}}

    <div class="rts-cta-main-wrapper rts-section-gapBottom bg-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-center cta-wrapper-two">
                        <div class="pre-title-area">
                            <span class="pre-title">Want to join the show?</span>
                        </div>
                        <h2 style="font-size: 30px" class="title quote">

                           On ONÍDÈMỌDÈ, Participants dive deep into Yoruba's past and present, tackling themes like education, religion,
                            music,
                            economics, family, and belief systems. It's an engaging way to celebrate and sustain the essence
                            of Yoruba culture.</h2>

                        <a href="contact.html" class="rts-btn btn-border">Register as a participant<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- back to top end -->

    <div id="anywhere-home">
    </div>
@endsection
