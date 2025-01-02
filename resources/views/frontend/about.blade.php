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
                            <img src="{{$data[0]['images'][0]['src']}}" alt="about">
                            <span class="pre-title">{{$data[0]['title']}}</span>
                        </div>
                        <h2 class="title">{{$data[0]['subtitle']}}</h2>
                    </div>
                    <div class="history-image-left mt--55 rts-reveal-one">
                        <img class="rts-reveal-image-one" src="{{$data[0]['images'][1]['src']}}" alt="about">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 mt_sm--50">
                    <div class="history-right-area-inner">
                        <p class="disc rts-slide-up">
                            {{$data[0]['description'][0]}}
                        </p>
                        <p class="disc rts-slide-up">
                            {{$data[0]['description'][1]}}
                        </p>
                        <p class="disc rts-slide-up">
                            {{$data[0]['description'][2]}}
                            <br>
                            {{$data[0]['description'][3]}}

                        </p>
                        <div class="history-right-img mt--80 rts-reveal-one">
                            <img class="rts-reveal-image-one" src="{{$data[0]['images'][2]['src']}}" alt="">
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
                            <img src="assets/images/about/02.png" alt="about">
                            <span class="pre-title">{{$data[1]['subtitle']}}</span>
                        </div>
                        <h2 class="title">{{$data[1]['title']}}</h2>
                    </div>
                    <div class="history-image-left mt--55 rts-reveal-one">
                        <img class="rts-reveal-image-one" src="{{$data[1]['images'][0]['src']}}" alt="about">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 mt_sm--50">
                    <div class="history-right-area-inner">
                        <p class="disc rts-slide-up">
                            {{$data[1]['description'][0]}}

                        </p>
                        <p class="disc rts-slide-up">

                            {{$data[1]['description'][1]}}
                        </p>
                        <div class="history-right-img mt--80 rts-reveal-one">
                            <img class="rts-reveal-image-one" src="{{$data[1]['images'][1]['src']}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
