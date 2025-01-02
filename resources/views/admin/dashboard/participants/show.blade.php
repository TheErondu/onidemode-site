@extends('layouts.admin.app')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <h3>Participant Details</h3>
    </div>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Details for {{ $participant->first_name }} {{ $participant->last_name }}</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>First Name</th>
                                <td>{{ $participant->first_name }}</td>
                            </tr>
                            <tr>
                                <th>Last Name</th>
                                <td>{{ $participant->last_name }}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{ $participant->gender }}</td>
                            </tr>
                            <tr>
                                <th>Age</th>
                                <td>{{ $participant->age }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $participant->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $participant->phone }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $participant->address }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Proficiency</th>
                                <td>{{ $participant->proficiency }}</td>
                            </tr>
                            <tr>
                                <th>Can Read & Write</th>
                                <td>{{ $participant->read_write ? 'Yes' : 'No' }}</td>
                            </tr>
                            <tr>
                                <th>Availability</th>
                                <td>
                                    <ul>
                                        @foreach (json_decode($participant->availability) as $time)
                                            <li>{{ $time }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>Proposed Date</th>
                                <td><strong>{{\App\Utils\CustomFormatter::formatDate($participant->proposed_date)}} </strong></td>
                            </tr>
                            <tr>
                                <th>Interest Reason</th>
                                <td>{{ $participant->interest_reason }}</td>
                            </tr>
                            <tr>
                                <th>Experience</th>
                                <td>{{ $participant->experience }}</td>
                            </tr>
                            <tr>
                                <th>Skills</th>
                                <td>{{ $participant->skills }}</td>
                            </tr>
                            <tr>
                                <th>Additional Info</th>
                                <td>{{ $participant->additional_info }}</td>
                            </tr>
                            <tr>
                                <th>Recording Consent</th>
                                <td>{{ $participant->recording_consent ? 'Yes' : 'No' }}</td>
                            </tr>
                            <tr>
                                <th>Rules Agreement</th>
                                <td>{{ $participant->rules_agreement ? 'Yes' : 'No' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <a href="{{ route('admin.settings.participants.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('admin.settings.participants.edit', $participant->id) }}" class="btn btn-primary">Edit Participant</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
