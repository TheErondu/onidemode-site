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
    <div style="padding: 9%" class="contact-info-area-start rts-section-gapTop">
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
                            A registration fee of  <strong>₦{{ config('settings.participant_registration_fee', '') }}</strong> is required to confirm your participation. We
                            look forward to
                            having you join us and showcasing your expertise in Yoruba heritage!
                        </p>
                    </div>

                </div>
            </div>


            <!-- Form -->
            <form id="paymentForm" action="{{ route('frontend.register.pay') }}" method="POST"
                class="contact-form-conatct-page">
                @csrf
                <input type="hidden" name="rules_agreement" value="Yes">
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

                <h3>Game Show Presence</h3>
                <div class="row g-5">
                    <div class="col-lg-12">
                        <label>Would you be available On-site or Online via Zoom?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="availability_type" id="inlineCheckbox7"
                                value="onsite">
                            <label class="form-check-label" for="inlineCheckbox7">On-site</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="availability_type" id="inlineCheckbox8"
                                value="zoom">
                            <label class="form-check-label" for="inlineCheckbox8">via Zoom</label>
                        </div>
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

                </div>

                <!-- Submit -->
                <div style="padding: 3rem">
                    <button type="submit" class="rts-btn btn-primary mt--30 center">Submit Registration</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Terms Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <!-- Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="termsLabel">Terms & Conditions</h5>
                </div>

                <!-- Body -->
                <div class="modal-body" style="max-height:70vh; overflow-y:auto; font-size:14px;">
                    <div class="container">
                        <p><strong>
                                These Terms and Conditions (“Terms”) govern participation in the ONIDEMODE "GAME SHOW",
                                organized by Awikonko Tv. By registering and participating, you (“Participant”) agree to be
                                bound by the following:
                            </strong></p>

                        <h6>1. Eligibility</h6>
                        <p>1.1. Participants must be at least 18 years of age or have parental/guardian consent if underage.
                        </p>
                        <p>1.2. Participants must have completed the online registration and paid the non-refundable
                            participation fee.</p>
                        <p>1.3. Employees, affiliates, and immediate family members of the organizing body are not eligible
                            to participate.</p>

                        <h6>2. Registration and Participation Fee</h6>
                        <p>2.1. All participants must complete the online registration form via the official platform.</p>
                        <p>2.2. A participation fee of ₦{{ config('settings.participant_registration_fee', '') }} must be paid upon registration to confirm participation.</p>
                        <p>2.3. The fee is non-refundable, regardless of withdrawal, disqualification, or failure to
                            participate.</p>
                        <p>2.4. Proof of payment may be requested at any time during the process.</p>

                        <h6>3. Game Format</h6>
                        <p>The Game consists of theory of 15 Questions in 3 Segments of 5 Questions each</p>
                        <ul>
                            <li>Organizers reserve the right to modify the rules or structure at any time.</li>
                        </ul>
                        <p>3.2. During the Objective Segment, participants must answer each of the 10 questions within the
                            given time.</p>
                        <p>3.3. If a participant cannot answer, they may let the host answer. In such cases:</p>
                        <ul>
                            <li>The winning value is split 50/50 between participant and host.</li>
                            <li>The participant is credited with half the points.</li>
                        </ul>
                        <p>3.4. After completing objective questions, the participant may end the game or proceed to the
                            Theory Segment.</p>
                        <p>3.5. Organizers reserve the right to modify the rules or structure at any time.</p>

                        <h6>4. Prizes</h6>
                        <p>4.1. Winners will receive advertised prizes.</p>
                        <p>4.2. Prizes are non-transferable and not exchangeable for cash.</p>
                        <p>4.3. Taxes/charges are the sole responsibility of winners.</p>
                        <p>4.4. Failure to comply may lead to disqualification.</p>

                        <h6>5. Disqualification</h6>
                        <ul>
                            <li>Providing false information</li>
                            <li>Using unauthorized materials</li>
                            <li>Disruptive or inappropriate behavior</li>
                            <li>Breaching any part of these Terms</li>
                        </ul>

                        <h6>6. Intellectual Property</h6>
                        <p>6.1. All content remains the property of the Organizers.</p>
                        <p>6.2. Participants grant Organizers the right to use names, images, and recordings for promotions.
                        </p>

                        <h6>7. Limitation of Liability</h6>
                        <p>7.1. Organizers are not liable for damages, losses, or injuries from participation.</p>
                        <p>7.2. Game is provided “as is” without warranties.</p>

                        <h6>8. Data Privacy</h6>
                        <p>8.1. Personal information will be used only for the Game.</p>
                        <p>8.2. Data will not be shared except as required by law.</p>

                        <h6>9. Governing Law</h6>
                        <p>These Terms shall be governed by the laws of Nigeria, with disputes under the jurisdiction of the
                            High Court of Osun State.</p>

                        <h6>10. Acceptance</h6>
                        <p>By registering and paying, you confirm that you have read, understood, and agreed to abide by
                            these Terms and Conditions.</p>
                    </div>
                </div>

                <!-- Footer -->
                <div class="modal-footer">
                    <button type="button" id="confirmTerms" class="rts-btn btn-primary">Agree and Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
             var hasAcceptedTerms = false;
            const modalElement = document.getElementById('termsModal');
            if (modalElement) {
                // Create modal instance
                const termsModal = new bootstrap.Modal(modalElement, {
                    backdrop: 'static',
                    keyboard: false
                });

                // Show modal after page load
                termsModal.show();

                // Confirm logic
                document.getElementById('confirmTerms').addEventListener('click', function() {

                    termsModal.hide();
                });
            }
        });
    </script>
@endpush
