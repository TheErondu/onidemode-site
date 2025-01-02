@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <h3>Manage Site Settings</h3>
        <p class="text-subtitle text-muted">Configure all your site settings</p>
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
            <h4 class="card-title">Site Settings</h4>
        </div>
        <form method="POST" action="{{ route('admin.settings.update') }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                @foreach ($settings->groupBy('group') as $group => $groupSettings)
                    <div class="mb-4 border p-3 rounded">
                        <h5 class="mb-3 text-capitalize">{{ $group }} Settings</h5>
                        @foreach ($groupSettings as $setting)
                            <div class="mb-3">
                                <label for="{{ $setting->key }}" class="form-label">
                                    {{ ucwords(str_replace('_', ' ', $setting->key)) }}
                                </label>
                                <input type="text"
                                       name="settings[{{ $setting->key }}]"
                                       value="{{ old('settings.' . $setting->key, $setting->value) }}"
                                       class="form-control">
                            </div>
                        @endforeach
                    </div>
                @endforeach
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('back-office') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                    <div class="col-md-6 text-end">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
