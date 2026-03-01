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
            <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">

                    @php
                        $imageKeys = ['site_logo', 'site_favicon', 'og_image'];
                    @endphp

                    @foreach ($settings->groupBy('group') as $group => $groupSettings)
                        <div class="mb-4 border p-3 rounded">
                            <h5 class="mb-3 text-capitalize">{{ $group }} Settings</h5>

                            @foreach ($groupSettings as $setting)
                                <div class="mb-3">
                                    <label for="{{ $setting->key }}" class="form-label">
                                        {{ ucwords(str_replace('_', ' ', $setting->key)) }}
                                    </label>

                                    @if(in_array($setting->key, $imageKeys))
                                        {{-- Image upload field with preview --}}
                                        <div class="d-flex align-items-start gap-3 flex-wrap">

                                            {{-- Preview box --}}
                                            <div>
                                                <div id="preview-box-{{ $setting->key }}"
                                                     style="width:120px;height:80px;border:2px dashed #ccc;border-radius:6px;display:flex;align-items:center;justify-content:center;overflow:hidden;background:#f8f9fa;">
                                                    @if($setting->value && $setting->value !== '/images/logo.png' && $setting->value !== '/images/logo/favicon.ico' && $setting->value !== '/images/logo/og-image.png')
                                                        <img id="preview-img-{{ $setting->key }}"
                                                             src="{{ asset($setting->value) }}"
                                                             alt="Current {{ $setting->key }}"
                                                             style="max-width:100%;max-height:100%;object-fit:contain;">
                                                    @else
                                                        <span id="preview-placeholder-{{ $setting->key }}"
                                                              style="font-size:11px;color:#aaa;text-align:center;padding:5px;">
                                                            No image set
                                                        </span>
                                                    @endif
                                                </div>
                                                <p class="text-muted mt-1" style="font-size:11px;">Current</p>
                                            </div>

                                            {{-- Upload input --}}
                                            <div class="flex-grow-1">
                                                <input type="file"
                                                       name="images[{{ $setting->key }}]"
                                                       id="{{ $setting->key }}"
                                                       class="form-control"
                                                       accept="image/*"
                                                       onchange="previewImage(this, '{{ $setting->key }}')">
                                                @if($setting->value)
                                                    <small class="text-muted">Current path: <code>{{ $setting->value }}</code></small>
                                                @endif
                                            </div>

                                        </div>
                                    @else
                                        <input type="text"
                                               name="settings[{{ $setting->key }}]"
                                               id="{{ $setting->key }}"
                                               value="{{ old('settings.' . $setting->key, $setting->value) }}"
                                               class="form-control">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endforeach

                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('admin.back-office') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script>
        function previewImage(input, key) {
            const box = document.getElementById('preview-box-' + key);
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    box.innerHTML = '<img src="' + e.target.result + '" style="max-width:100%;max-height:100%;object-fit:contain;">';
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
