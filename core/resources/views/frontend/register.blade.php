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
                            <a class="active" href="#">Register</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">Register as a Participant</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Important Information Section Start -->
    <div class="contact-info-area-start rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="center col-lg-12 text-center mb-5">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="top">
                        <h2 class="title">Important Information</h2>
                        <p>Please make sure to enter your <strong>correct email address</strong> and <strong>phone
                                number</strong>.
                            All payments are processed securely via <strong>Paystack</strong>.
                            Your payment details are encrypted and kept safe, ensuring the highest level of security.
                            You will receive a confirmation email upon successful payment.</p>
                    </div>
                </div>
            </div>
            <div class="row mt--0 g-5">
                <!-- Payment Information Section -->
                <div class="col-lg-4 col-md-6">
                    <div class="left-contact">
                        <h3>Secure Payment</h3>
                        <p>We accept payments through the following verified platforms:</p>
                        <!-- Row of Payment Provider Icons -->
                        <div class="payment-icons d-flex justify-content-start mt-3">
                            <img src="{{ asset('assets/images/logo/paystack.256x252.png') }}" alt="Paystack"
                                style="width: 55px; height:40px; margin-right: 10px;">
                            <img src="{{ asset('assets/images/logo/visa.256x79.png') }}" alt="Visa"
                                style="width: 55px; height:40px; margin-right: 10px;">
                            <img src="{{ asset('assets/images/logo/mastercard.256x198.png') }}" alt="MasterCard"
                                style="width: 55px; height:40px; margin-right: 10px;">
                            <img src="{{ asset('assets/images/logo/verve.256x89.png') }}" alt="Verve"
                                style="width: 55px; height:40px; margin-right: 10px;">
                        </div>
                    </div>
                </div>

                <!-- Contact Form Section -->
                <div style="padding-bottom: 6rem" class="col-lg-4 col-md-6">
                    <form id="paymentForm" action="{{ route('participants.payment.process') }}" method="POST"
                        class="contact-form-conatct-page">
                        @csrf
                        <p class="top-contact mb--20">Payment Form</p>
                        <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
                        <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
                        <input type="email" id="email" name="email" placeholder="Email Address" required>
                        <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
                        <button type="submit" class="rts-btn btn-primary mt--30">Proceed to Payment</button>
                    </form>
                    <!-- Error Message Container -->
                    <div id="errorMessage" style="color: red; margin-top: 10px;"></div>
                </div>

                <!-- Empty Column for Alignment -->
                <div class="col-lg-4 col-md-6 pl--50 pl_md--15 pl_sm--15">
                </div>
            </div>
        </div>
    </div>
    <!-- Important Information Section End -->

    <!-- JavaScript Validation -->
    <script>
        document.getElementById('paymentForm').addEventListener('submit', function(event) {
            // Prevent form submission
            event.preventDefault();

            // Get form values
            const name = document.getElementById('first_name').value.trim();
            const name = document.getElementById('last_name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const errorMessage = document.getElementById('errorMessage');

            // Clear previous error messages
            errorMessage.textContent = '';

            // Email Validation Regex
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Phone Number Validation Regex (Nigeria Phone Format: 11 digits starting with 0 or +234)
            const phoneRegex = /^(?:\+234|0)\d{10}$/;

            // Validation Logic
            if (first_name === '') {
                errorMessage.textContent = 'Please enter your First name.';
                return;
            }

            // Validation Logic
            if (last_name === '') {
                errorMessage.textContent = 'Please enter your Last name.';
                return;
            }

            if (!emailRegex.test(email)) {
                errorMessage.textContent = 'Please enter a valid email address.';
                return;
            }

            if (!phoneRegex.test(phone)) {
                errorMessage.textContent =
                    'Please enter a valid phone number (e.g., +234 or 0 followed by 10 digits).';
                return;
            }

            // If all validations pass, submit the form
            this.submit();
        });
    </script>
@endsection
