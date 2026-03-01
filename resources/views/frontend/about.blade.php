@extends('layouts.frontend.app')
<!-- header three area start -->
<!-- bread croumba rea start -->
@section('content')
    <div class="breadcrumb-area-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb-area-inner">
                        <div class="breadcrumb-top">
                            <a href="#">Home</a> /
                            <a class="active" href="#">About</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->

    <!-- about  page top histoory information  -->
    <div class="about-top-history-information rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="title-style-left">
                        <div class="pre-title-area">
                            <img src="{{ asset('assets/images/about/02.png') }}" alt="about">
                            <span class="pre-title">ONIDEMODE</span>
                        </div>
                        <h2 class="title">OUR VISION</h2>
                    </div>
                    <div class="history-image-left mt--55 rts-reveal-one">
                        <img class="rts-reveal-image-one" src="{{ asset('assets/images/banner/16.webp') }}" alt="about">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 mt_sm--50">
                    <div class="history-right-area-inner">
                        <p class="disc rts-slide-up">
                            To promote and elevate Yoruba language, culture and traditions, by focusing on its recovery, preservation, promotion and utilization of its enduring ways of being for the purposes of holistic development, appreciation, and international understanding.
                        </p>
                        <p class="disc rts-slide-up">
                            To communicate effectively in Yoruba language and interact in its culturally appropriate manner with towns, cities, and native dialects of Yoruba language.
                        </p>
                        <p class="disc rts-slide-up">
                            To achieve functional proficiency in listening, speaking, reading, and writing Yoruba language correctly and appropriately.
                            <br>
                            To decode, analyze, and interpret authentic texts of different genres.

                        </p>
                        <div class="history-right-img mt--80 rts-reveal-one">
                            <img class="rts-reveal-image-one" src="{{ asset('assets/images/about/14.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about  page top histoory information  -->
    <div class="about-top-history-information rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="title-style-left">
                        <div class="pre-title-area">
                            <img src="{{ asset('assets/images/about/02.png') }}" alt="about">
                            <span class="pre-title">ONIDEMODE</span>
                        </div>
                        <h2 class="title">OUR MISSION</h2>
                    </div>
                    <div class="history-image-left mt--55 rts-reveal-one">
                        <img class="rts-reveal-image-one" src="{{ asset('assets/images/about/02.png') }}" alt="about">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 mt_sm--50">
                    <div class="history-right-area-inner">
                        <p class="disc rts-slide-up">
                            We surely believe that ONÍDÈMỌDÈ Game Show will provide audience, viewers, and all sons and daughters of Yoruba land with solid foundation in historical knowledge backgrounds of Yoruba-based philosophies and the contemporary nuances of the culture and life of the Yoruba people.

                        </p>
                        <p class="disc rts-slide-up">

                            We will explore various aspects of the Yoruba language, culture, heritage, tradition, history, literature, and more to give the audience a broad overview of the worldview of the Yoruba people and their lives.
                        </p>
                        <div class="history-right-img mt--80 rts-reveal-one">
                            <img class="rts-reveal-image-one" src="{{ asset('assets/images/banner/16.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
