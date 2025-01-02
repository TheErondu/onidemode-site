@extends('layouts.frontend.app')
@section('content')
    <!-- header three area end -->
    <!-- header three area end -->


    <!-- header three area start -->
    <!-- bread croumba rea start -->
    <div class="breadcrumb-area-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb-area-inner">
                        <div class="breadcrumb-top">
                            <a href="#">Home</a> /
                            <a class="active" href="#">Contact Us</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->


    <div class="contact-info-area-start rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top">
                        <h2 class="title">{{$data[0]['title']}}</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--0 g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="left-contact">
                        <p class="top mb--30">
                            {{$data[0]['subtitle']}}
                        </p>
                        <p class="disc mb--20">
                            {{$data[0]['description'][0]}}
                        </p>
                        <a href="#">Hot Line: {{$data[0]['phone']}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pl--50 pl_md--15 pl_sm--15">
                    <div class="contact-info-mid">
                        <p class="top-contact mb--20">Contact Details</p>
                        <div class="single-information mt--30">
                            <span>Address:</span>
                            <p class="address" style="text-decoration: underline;">
                                {{$data[0]['address']}}
                            </p>
                        </div>
                        <div class="single-information">
                            <span>Phone:</span>
                            <a href="Tel:123-456-7890">
                                {{$data[0]['phone']}}
                            </a>
                        </div>
                        <div class="single-information">
                            <span>Mail:</span>
                            <a href="mailto:{{$data[0]['email']}}">
                                {{$data[0]['email']}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <form action="#" class="contact-form-conatct-page">
                        <p class="top-contact mb--20">Contac Form</p>
                        <input type="text" placeholder="Your name" required>
                        <input type="text" placeholder="Phone Number">
                        <textarea placeholder="Your message"></textarea>
                        <button class="rts-btn btn-primary mt--30">Send Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container mt--120">
            <div class="row">
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d8254.021045171208!2d-95.11818240981121!3d29.563301798292883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRestaurants!5e0!3m2!1sen!2sbd!4v1697535735266!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
