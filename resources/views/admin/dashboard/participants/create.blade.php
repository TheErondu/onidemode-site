
@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <h3>Add New Participant</h3>
    </div>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Participant Details</h4>
        </div>
        <form method="POST" action="{{ route('admin.settings.participants.store') }}">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input name="first_name" type="text" class="form-control" id="first_name" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email">
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
