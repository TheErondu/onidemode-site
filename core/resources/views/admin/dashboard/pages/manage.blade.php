@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <h3>Manage Page Sections</h3>
        <p class="text-subtitle text-muted">Edit the content dynamically for each section and field.</p>
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
            <h4 class="card-title">Manage Section Inputs</h4>
              {{-- Add a single file input field --}}
              <div class="row mt-4 border-top pt-3">
                <h6 class="card-title">Use this upload tool to upload and get the file path for your images</h6>
                <div class="col-md-6 mb-3">
                    <label for="uploadFile" class="form-label">Upload Image</label>
                    <input type="file" id="uploadFile" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="filePath" class="form-label">File Path</label>
                    <input type="text" id="filePath" class="form-control" readonly>
                </div>
                <div class="col-md-12 text-end">
                    <button type="button" id="saveFile" class="btn btn-primary">Get file path</button>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('admin.pages.manage.update', $page['id']) }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                {{-- Iterate through sections --}}
                @foreach ($page['content']['sections'] as $sectionId => $section)
                    <div class="mb-4 border p-3 rounded">
                        <h5>Section {{ ucfirst($sectionId + 1 ) }}</h5>
                        <div class="row">
                            {{-- Render fields dynamically --}}
                            @foreach ($section as $key => $value)
                            @if (is_array($value))
                                {{-- Nested Maps as Input Groups --}}
                                <div class="col-md-12 mb-3">
                                    <h6>{{ ucfirst($key) }}</h6>
                                    <div class="border p-3 rounded">
                                        @foreach ($value as $nestedKey => $nestedValue)
                                            @if (is_array($nestedValue))
                                                {{-- Recursively handle deeper nested structures --}}
                                                <div class="mb-3">
                                                    <h6>{{ ucfirst($nestedKey) }}</h6>
                                                    <div class="border p-3 rounded">
                                                        @foreach ($nestedValue as $deepKey => $deepValue)
                                                            <div class="mb-2">
                                                                <label for="sections[{{ $sectionId }}][{{ $key }}][{{ $nestedKey }}][{{ $deepKey }}]" class="form-label">
                                                                    {{ ucfirst($deepKey) }}
                                                                </label>
                                                                <input type="text"
                                                                       name="sections[{{ $sectionId }}][{{ $key }}][{{ $nestedKey }}][{{ $deepKey }}]"
                                                                       value="{{ is_string($deepValue) ? $deepValue : '' }}"
                                                                       class="form-control">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @else
                                                {{-- Single-level nested fields --}}
                                                <div class="mb-2">
                                                    <label for="sections[{{ $sectionId }}][{{ $key }}][{{ $nestedKey }}]" class="form-label">
                                                        {{ ucfirst($nestedKey) }}
                                                    </label>
                                                    <input type="text"
                                                           name="sections[{{ $sectionId }}][{{ $key }}][{{ $nestedKey }}]"
                                                           value="{{ is_string($nestedValue) ? $nestedValue : '' }}"
                                                           class="form-control">
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                {{-- Simple Fields --}}
                                <div class="col-md-6 mb-2">
                                    <label for="sections[{{ $sectionId }}][{{ $key }}]" class="form-label">{{ ucfirst($key) }}</label>
                                    <input type="text"
                                           name="sections[{{ $sectionId }}][{{ $key }}]"
                                           value="{{ is_string($value) ? $value : '' }}"
                                           class="form-control">
                                </div>
                            @endif
                        @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('back-office') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                @endforeach

            </div>
        </form>
    </div>
</section>

<script>
    document.getElementById('saveFile').addEventListener('click', function () {
        const fileInput = document.getElementById('uploadFile');
        const file = fileInput.files[0];
        const formData = new FormData();

        if (file) {
            formData.append('file', file);

            fetch('{{ route('admin.pages.manage.upload') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('filePath').value = data.filePath;
                    alert('File uploaded successfully!');
                } else {
                    alert('Failed to upload file. Please try again.');
                }
            })
            .catch(error => console.error('Error:', error));
        } else {
            alert('Please select a file to upload.');
        }
    });
</script>
@endsection
