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
            <form method="POST" action="{{ route('admin.pages.manage.update', $page) }}">
                @method('PUT')
                @csrf

                <!-- Vision Section -->
                <div class="card my-4">
                    <div class="card-header">
                        <h3>Vision Section</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="vision_title">Title</label>
                            <input type="text" class="form-control" name="sections[0][title]"
                                value="{{ $page['content']['sections'][0]['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="vision_subtitle">Subtitle</label>
                            <input type="text" class="form-control" name="sections[0][subtitle]"
                                value="{{ $page['content']['sections'][0]['subtitle'] }}">
                        </div>
                        @foreach ($page['content']['sections'][0]['description'] as $index => $text)
                            <div class="form-group">
                                <label for="vision_description_{{ $index }}">Description {{ $index + 1 }}</label>
                                <textarea class="form-control" name="sections[0][description][{{ $index }}]">{{ $text }}</textarea>
                            </div>
                        @endforeach
                        @foreach ($page['content']['sections'][0]['images'] as $index => $image)
                            <div class="form-group">
                                <label for="vision_image_{{ $index }}">Image {{ $index + 1 }} Source</label>
                                <input type="text" class="form-control"
                                    name="sections[0][images][{{ $index }}][src]" value="{{ $image['src'] }}">
                                <label for="vision_image_{{ $index }}_alt">Alt Text</label>
                                <input type="text" class="form-control"
                                    name="sections[0][images][{{ $index }}][alt]" value="{{ $image['alt'] }}">
                                <label for="vision_image_{{ $index }}_position">Position</label>
                                <input type="text" class="form-control"
                                    name="sections[0][images][{{ $index }}][position]"
                                    value="{{ $image['position'] }}">
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Mission Section -->
                <div class="card my-4">
                    <div class="card-header">
                        <h3>Mission Section</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="mission_title">Title</label>
                            <input type="text" class="form-control" name="sections[1][title]"
                                value="{{ $page['content']['sections'][1]['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="mission_subtitle">Subtitle</label>
                            <input type="text" class="form-control" name="sections[1][subtitle]"
                                value="{{ $page['content']['sections'][1]['subtitle'] }}">
                        </div>
                        @foreach ($page['content']['sections'][1]['description'] as $index => $text)
                            <div class="form-group">
                                <label for="mission_description_{{ $index }}">Description
                                    {{ $index + 1 }}</label>
                                <textarea class="form-control" name="sections[1][description][{{ $index }}]">{{ $text }}</textarea>
                            </div>
                        @endforeach
                        @foreach ($page['content']['sections'][1]['images'] as $index => $image)
                            <div class="form-group">
                                <label for="mission_image_{{ $index }}">Image {{ $index + 1 }} Source</label>
                                <input type="text" class="form-control"
                                    name="sections[1][images][{{ $index }}][src]" value="{{ $image['src'] }}">
                                <label for="mission_image_{{ $index }}_alt">Alt Text</label>
                                <input type="text" class="form-control"
                                    name="sections[1][images][{{ $index }}][alt]" value="{{ $image['alt'] }}">
                                <label for="mission_image_{{ $index }}_position">Position</label>
                                <input type="text" class="form-control"
                                    name="sections[1][images][{{ $index }}][position]"
                                    value="{{ $image['position'] }}">
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="card my-4">
                    <div class="card-header">
                        <h3>Contact Section</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="contact_title">Title</label>
                            <input type="text" class="form-control" name="sections[2][title]"
                                value="{{ $page['content']['sections'][2]['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="contact_subtitle">Subtitle</label>
                            <input type="text" class="form-control" name="sections[2][subtitle]"
                                value="{{ $page['content']['sections'][2]['subtitle'] }}">
                        </div>
                        @foreach ($page['content']['sections'][2]['form']['fields'] as $index => $field)
                            <div class="form-group">
                                <label for="contact_form_field_{{ $index }}">Field {{ $index + 1 }}
                                    Type</label>
                                <input type="text" class="form-control"
                                    name="sections[2][form][fields][{{ $index }}][type]"
                                    value="{{ $field['type'] }}">
                                <label for="contact_form_field_{{ $index }}_placeholder">Placeholder</label>
                                <input type="text" class="form-control"
                                    name="sections[2][form][fields][{{ $index }}][placeholder]"
                                    value="{{ $field['placeholder'] }}">
                            </div>
                        @endforeach
                        <div class="form-group">
                            <label for="contact_form_button_text">Button Text</label>
                            <input type="text" class="form-control" name="sections[2][form][button][text]"
                                value="{{ $page['content']['sections'][2]['form']['button']['text'] }}">
                            <label for="contact_form_button_class">Button Class</label>
                            <input type="text" class="form-control" name="sections[2][form][button][class]"
                                value="{{ $page['content']['sections'][2]['form']['button']['class'] }}">
                        </div>
                        @foreach ($page['content']['sections'][2]['images'] as $index => $image)
                            <div class="form-group">
                                <label for="contact_image_{{ $index }}">Image {{ $index + 1 }} Source</label>
                                <input type="text" class="form-control"
                                    name="sections[2][images][{{ $index }}][src]" value="{{ $image['src'] }}">
                                <label for="contact_image_{{ $index }}_alt">Alt Text</label>
                                <input type="text" class="form-control"
                                    name="sections[2][images][{{ $index }}][alt]" value="{{ $image['alt'] }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div style="padding: 20px">
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </section>

    <script>
        document.getElementById('saveFile').addEventListener('click', function() {
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
