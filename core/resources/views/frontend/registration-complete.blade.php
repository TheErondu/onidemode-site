@extends('layouts.frontend.app')
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb-area-inner">
                        <div class="breadcrumb-top">
                            <a href="#">Home</a> /
                            <a class="active" href="#">Thank You</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">Thank You for Registering!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Thank You Section Start -->
    <div class="contact-info-area-start rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="center col-lg-12 text-center mb-5">
                    <div class="top">
                        <h2 class="title">Thank You, {{ $newParticipant->first_name }} {{ $newParticipant->last_name }}!</h2>
                        <p>Your payment has been received successfully.</p>
                        <p>We are thrilled to have you onboard as a participant. A confirmation email has been sent to <strong>{{ $newParticipant->email }}</strong>, and we will notify you of the next steps via your email and phone number (<strong>{{ $newParticipant->phone }}</strong>).</p>
                        <p>Should you have any questions or need assistance, feel free to contact us. We are always happy to help.</p>
                    </div>
                </div>
            </div>
            <div class="row mt--0 g-5">
                <div style="padding-bottom: 6rem" class="col-lg-12 text-center">
                    <h3>What Happens Next?</h3>
                    <ul style="list-style-type: none; padding: 0;">
                        <li>- Our team will review your registration and contact you with additional details.</li>
                        <li>- Keep an eye on your email for updates and further instructions.</li>
                        <li>- If you have any inquiries, reach us via our contact page.</li>
                    </ul>
                    <a href="{{ route('frontend.home') }}" class="rts-btn btn-primary mt--30">Return to Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Thank You Section End -->
@endsection
