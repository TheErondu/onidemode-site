@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <h3>Manage Participants</h3>
        <p class="text-subtitle text-muted">Manage all registered participants</p>
    </div>
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
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Participants</h4>
            <a class="btn btn-primary" href="{{ route('admin.settings.participants.create') }}">Add New Participant</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-lg">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($participants as $participant)
                        <tr>
                            <td>{{ $participant->first_name }}</td>
                            <td>{{ $participant->last_name }}</td>
                            <td>{{ $participant->phone }}</td>
                            <td>{{ $participant->email }}</td>
                            <td>
                                <a href="{{ route('admin.settings.participants.edit', $participant->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('admin.settings.participants.destroy', $participant->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No Participants to Display...</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
