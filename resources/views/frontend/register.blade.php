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
                            <h1 class="title">Register for Onídèmọdẹ Game Show</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Registration Form Section Start -->
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

                        <p>We value your participation in this interactive game show designed to highlight your fluency and
                            knowledge of Yoruba culture, language, vocabulary, idioms, proverbs, and ethics. To provide you
                            with a rich and personalized game experience, we require the information you provide during
                            registration. This ensures we can tailor the event to your unique skills and interests.
                            <br>
                            A registration fee of <strong> ₦1,000</strong> is required to confirm your participation. We look forward to
                            having you join us and showcasing your expertise in Yoruba heritage!</p>
                    </div>

                </div>
            </div>


            <!-- Form -->
            <form action="{{ route('frontend.register.pay') }}" method="POST" class="contact-form-conatct-page">
                @csrf
                <!-- Personal Details -->
                <h3>Personal Details</h3>
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="first_name" placeholder="First name" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="last_name" placeholder="Last name" required>
                    </div>

                </div>

                <div class="row g-5">
                    <div class="col-lg-6 col-md-6">
                        <label>Gender</label>
                        <select class="select-dropdown" name="gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="number" name="age" placeholder="Age" required>
                    </div>

                </div>

                <div class="row g-5">
                    <div class="col-lg-6 col-md-6">
                        <input type="email" name="email" placeholder="Email Address">
                        <input type="text" name="address" placeholder="Address">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="phone" placeholder="Phone (e.g., +234...)" required>
                    </div>
                </div>

                <!-- Language Proficiency -->
                <h3>Language Proficiency</h3>
                <div class="row g-5">
                    <div class="col-lg-12">
                        <label>How would you rate your proficiency in Yoruba?</label>
                        <select class="select-dropdown" name="proficiency" required>
                            <option value="Native speaker">Native speaker</option>
                            <option value="Fluent">Fluent</option>
                            <option value="Conversational">Conversational</option>
                            <option value="Basic">Basic</option>
                            <option value="None">None</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <label>Can you read and write in Yoruba?</label>
                        <select class="select-dropdown" name="read_write" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>

                <!-- Availability -->
                <h3>Availability</h3>
                <div class="row g-5">
                    <div class="col-lg-12">
                        <label>What times are you generally available?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="availability[]" id="inlineCheckbox1"
                                value="Weekday mornings">
                            <label class="form-check-label" for="inlineCheckbox1">Weekday mornings</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="availability[]" id="inlineCheckbox2"
                                value="Weekday afternoons">
                            <label class="form-check-label" for="inlineCheckbox2">Weekday afternoons</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="availability[]" id="inlineCheckbox3"
                                value="Weekday evenings">
                            <label class="form-check-label" for="inlineCheckbox3">Weekday evenings</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="availability[]" id="inlineCheckbox4"
                                value="Weekend mornings">
                            <label class="form-check-label" for="inlineCheckbox4">Weekend mornings</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="availability[]" id="inlineCheckbox5"
                                value="Weekend afternoons">
                            <label class="form-check-label" for="inlineCheckbox5">Weekend afternoons</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="availability[]" id="inlineCheckbox6"
                                value="Weekend evenings">
                            <label class="form-check-label" for="inlineCheckbox6">Weekend evenings</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label>Propose a date for the game show:</label>
                        <input type="date" name="proposed_date" required>
                    </div>
                </div>

                <!-- Additional Questions -->
                <h3>Additional Information</h3>
                <div class="row g-5">
                    <div class="col-lg-12">
                        <label class="label-compact">Why are you interested in participating in this Yoruba game
                            show?</label>
                        <textarea class="text-area-compact" name="interest_reason" required></textarea>
                        <label class="label-compact">Describe any previous experience with game shows or similar
                            events:</label>
                        <textarea class="text-area-compact" name="experience" required></textarea>
                        <label class="label-compact">Do you have any special talents or skills that would be interesting
                            for the show?</label>
                        <textarea class="text-area-compact" name="skills" required></textarea>
                        <label class="label-compact">Is there anything else you'd like us to know about you?</label>
                        <textarea class="text-area-compact" name="additional_info" required></textarea>
                    </div>
                </div>

                <!-- Consent -->
                <div class="row g-5">
                    <div class="col-lg-12">
                        <label class="label-compact">Do you consent to having your participation recorded and
                            broadcasted?</label>
                        <select class="select-dropdown" name="recording_consent" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <label class="label-compact">Do you agree to follow the rules and guidelines?</label>
                        <select class="select-dropdown" name="rules_agreement" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>

                <!-- Submit -->
                <div style="padding: 3rem">
                    <button type="submit" class="rts-btn btn-primary mt--30 center">Submit Registration</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Registration Form Section End -->
    <script>
        document.getElementById('paymentForm').addEventListener('submit', function(event) {
            // Prevent form submission
            event.preventDefault();

            // Get form values
            const first_name = document.getElementById('first_name').value.trim();
            const last_name = document.getElementById('last_name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const age = document.getElementById('age').value.trim();
            const gender = document.querySelector('input[name="gender"]:checked');
            const proficiency = document.querySelector('input[name="proficiency"]:checked');
            const read_write = document.querySelector('input[name="read_write"]:checked');
            const daily_usage = document.querySelector('input[name="daily_usage"]:checked');
            const proverbs_familiarity = document.querySelector('input[name="proverbs_familiarity"]:checked');
            const culture_knowledge = document.querySelector('input[name="culture_knowledge"]:checked');
            const availability = document.querySelectorAll('input[name="availability"]:checked');
            const proposed_date = document.getElementById('proposed_date').value.trim();
            const commitment = document.querySelector('input[name="commitment"]:checked');
            const interest_reason = document.getElementById('interest_reason').value.trim();
            const candidate_reason = document.getElementById('candidate_reason').value.trim();
            const experience = document.getElementById('experience').value.trim();
            const talents = document.getElementById('talents').value.trim();
            const additional_info = document.getElementById('additional_info').value.trim();
            const consent = document.querySelector('input[name="consent"]:checked');
            const rules_agreement = document.querySelector('input[name="rules_agreement"]:checked');
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

            if (last_name === '') {
                errorMessage.textContent = 'Please enter your Last name.';
                return;
            }

            if (age === '' || isNaN(age) || parseInt(age) < 0) {
                errorMessage.textContent = 'Please enter a valid age.';
                return;
            }

            if (!gender) {
                errorMessage.textContent = 'Please select your gender.';
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

            if (!proficiency) {
                errorMessage.textContent = 'Please rate your proficiency in Yoruba.';
                return;
            }

            if (!read_write) {
                errorMessage.textContent = 'Please indicate if you can read and write in Yoruba.';
                return;
            }

            if (!daily_usage) {
                errorMessage.textContent = 'Please indicate how often you speak Yoruba in your daily life.';
                return;
            }

            if (!proverbs_familiarity) {
                errorMessage.textContent = 'Please indicate your familiarity with Yoruba proverbs.';
                return;
            }

            if (!culture_knowledge) {
                errorMessage.textContent = 'Please indicate your knowledge of Yoruba history and culture.';
                return;
            }

            if (availability.length === 0) {
                errorMessage.textContent = 'Please select at least one time you are available for the game show.';
                return;
            }

            if (proposed_date === '') {
                errorMessage.textContent = 'Please propose a date for the game show.';
                return;
            }

            if (!commitment) {
                errorMessage.textContent = 'Please indicate your commitment to the game show season.';
                return;
            }

            if (interest_reason === '') {
                errorMessage.textContent = 'Please explain why you are interested in this game show.';
                return;
            }

            if (candidate_reason === '') {
                errorMessage.textContent = 'Please explain what makes you a good candidate for this game show.';
                return;
            }

            if (experience === '') {
                errorMessage.textContent = 'Please describe any previous experience with game shows.';
                return;
            }

            if (!consent) {
                errorMessage.textContent = 'Please consent to having your participation recorded and broadcasted.';
                return;
            }

            if (!rules_agreement) {
                errorMessage.textContent = 'Please agree to follow the game show rules and guidelines.';
                return;
            }

            // If all validations pass, submit the form
            this.submit();
        });
    </script>

@endsection
