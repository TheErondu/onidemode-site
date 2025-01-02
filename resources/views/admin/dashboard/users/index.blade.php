@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <h3>Manage Users</h3>
        <p class="text-subtitle text-muted">Manage all registered users</p>
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
            <h4 class="card-title">Users</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-lg">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr>
                            <td class="col-3">
                                <div class="d-flex align-items-center">
                                    <p class="font-bold ms-3 mb-0">{{$user->name}}</p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{$user->email}}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{$user->role??"Admin"}}</p>
                            </td>
                            <td class="col-auto">
                                <a href="{{ route('admin.settings.users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('admin.settings.users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No Users to Display...</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
