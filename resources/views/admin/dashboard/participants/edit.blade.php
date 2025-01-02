@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <h3>Edit Participant</h3>
    </div>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Participant Details</h4>
            @if (Session::has('message'))
            <div class="alert alert-success">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <strong>{{ $error }}</strong>
                @endforeach
            </div>
        @endif
        </div>
        <form method="POST" action="{{ route('admin.settings.participants.update', $participant->id) }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input name="first_name" type="text" class="form-control" id="first_name" value="{{ $participant->first_name }}" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input name="last_name" type="text" class="form-control" id="last_name" value="{{ $participant->last_name }}" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input name="phone" type="text" class="form-control" id="phone" value="{{ $participant->phone }}" placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" value="{{ $participant->email }}" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" class="form-control" id="gender">
                                <option value="Male" {{ $participant->gender === 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $participant->gender === 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input name="age" type="number" class="form-control" id="age" value="{{ $participant->age }}" placeholder="Enter Age">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" class="form-control" id="address" placeholder="Enter Address">{{ $participant->address }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="proficiency">Proficiency</label>
                            <input name="proficiency" type="text" class="form-control" id="proficiency" value="{{ $participant->proficiency }}" placeholder="Enter Proficiency">
                        </div>
                        <div class="form-group">
                            <label for="read_write">Read & Write</label>
                            <select name="read_write" class="form-control" id="read_write">
                                <option value="1" {{ $participant->read_write ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ !$participant->read_write ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Availability</label>
                            <div class="checkbox-group">
                                @foreach($availabilityOptions as $option)
                                    <div class="form-check">
                                        <input type="checkbox"
                                               name="availability[]"
                                               class="form-check-input"
                                               id="availability_{{ Str::slug($option) }}"
                                               value="{{ $option }}"
                                               {{ in_array($option, json_decode($participant->availability) ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="availability_{{ Str::slug($option) }}">
                                            {{ $option }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="proposed_date">Proposed Date</label>
                            <input name="proposed_date" type="date" class="form-control" id="proposed_date" value="{{ $participant->proposed_date }}">
                        </div>
                        <div class="form-group">
                            <label for="interest_reason">Reason for Interest</label>
                            <textarea name="interest_reason" class="form-control" id="interest_reason" placeholder="Enter Interest Reason">{{ $participant->interest_reason }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="experience">Experience</label>
                            <textarea name="experience" class="form-control" id="experience" placeholder="Enter Experience">{{ $participant->experience }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="skills">Skills</label>
                            <textarea name="skills" class="form-control" id="skills" placeholder="Enter Skills">{{ $participant->skills }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="additional_info">Additional Information</label>
                            <textarea name="additional_info" class="form-control" id="additional_info" placeholder="Enter Additional Information">{{ $participant->additional_info }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="recording_consent">Recording Consent</label>
                            <select name="recording_consent" class="form-control" id="recording_consent">
                                <option value="1" {{ $participant->recording_consent ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ !$participant->recording_consent ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rules_agreement">Rules Agreement</label>
                            <select name="rules_agreement" class="form-control" id="rules_agreement">
                                <option value="1" {{ $participant->rules_agreement ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ !$participant->rules_agreement ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <a href="{{ route('admin.settings.participants.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                    <div class="mb-3 col-md-1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
