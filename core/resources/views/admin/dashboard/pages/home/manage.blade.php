@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h1>Edit ONÍDÈMỌDÈ Content</h1>
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

        <!-- Banner Section -->
        <div class="card my-4">
            <div class="card-header">
                <h3>Banner Section</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="banner_title">Title</label>
                    <input type="text" class="form-control" name="sections[0][title]" value="{{ $page['content']['sections'][0]['title'] }}">
                </div>
                <div class="form-group">
                    <label for="banner_description">Description</label>
                    <textarea class="form-control" name="sections[0][description]">{{ $page['content']['sections'][0]['description'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="banner_cta_text">CTA Text</label>
                    <input type="text" class="form-control" name="sections[0][cta][text]" value="{{ $page['content']['sections'][0]['cta']['text'] }}">
                </div>
                <div class="form-group">
                    <label for="banner_cta_link">CTA Link</label>
                    <input type="text" class="form-control" name="sections[0][cta][link]" value="{{ $page['content']['sections'][0]['cta']['link'] }}">
                </div>
                @foreach ($page['content']['sections'][0]['images'] as $index => $image)
                    <div class="form-group">
                        <label for="banner_image_{{ $index }}">Image {{ $index + 1 }} Source</label>
                        <input type="text" class="form-control" name="sections[0][images][{{ $index }}][src]" value="{{ $image['src'] }}">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- About Section -->
        <div class="card my-4">
            <div class="card-header">
                <h3>About Section</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="about_title">Title</label>
                    <input type="text" class="form-control" name="sections[1][title]" value="{{ $page['content']['sections'][1]['title'] }}">
                </div>
                <div class="form-group">
                    <label for="about_subtitle">Subtitle</label>
                    <input type="text" class="form-control" name="sections[1][subtitle]" value="{{ $page['content']['sections'][1]['subtitle'] }}">
                </div>
                <div class="form-group">
                    <label for="about_description">Description</label>
                    <textarea class="form-control" name="sections[1][description]">{{ $page['content']['sections'][1]['description'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="about_cta_text">CTA Text</label>
                    <input type="text" class="form-control" name="sections[1][cta][text]" value="{{ $page['content']['sections'][1]['cta']['text'] }}">
                </div>
                <div class="form-group">
                    <label for="about_cta_link">CTA Link</label>
                    <input type="text" class="form-control" name="sections[1][cta][link]" value="{{ $page['content']['sections'][1]['cta']['link'] }}">
                </div>
                <div class="form-group">
                    <label for="about_image">Image</label>
                    <input type="text" class="form-control" name="sections[1][image]" value="{{ $page['content']['sections'][1]['image'] }}">
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="card my-4">
            <div class="card-header">
                <h3>Team Section</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="team_title">Title</label>
                    <input type="text" class="form-control" name="sections[2][title]" value="{{ $page['content']['sections'][2]['title'] }}">
                </div>
                @foreach ($page['content']['sections'][2]['members'] as $index => $member)
                    <div class="form-group">
                        <label for="member_name_{{ $index }}">Name</label>
                        <input type="text" class="form-control" name="sections[2][members][{{ $index }}][name]" value="{{ $member['name'] }}">
                        <label for="member_designation_{{ $index }}">Designation</label>
                        <input type="text" class="form-control" name="sections[2][members][{{ $index }}][designation]" value="{{ $member['designation'] }}">
                        <label for="member_image_{{ $index }}">Image</label>
                        <input type="text" class="form-control" name="sections[2][members][{{ $index }}][image]" value="{{ $member['image'] }}">
                        @foreach ($member['social_links'] as $platform => $link)
                            <label for="member_social_{{ $platform }}">Social Link ({{ ucfirst($platform) }})</label>
                            <input type="text" class="form-control" name="sections[2][members][{{ $index }}][social_links][{{ $platform }}]" value="{{ $link }}">
                        @endforeach
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
                    <input type="text" class="form-control" name="sections[3][title]" value="{{ $page['content']['sections'][3]['title'] }}">
                </div>
                <div class="form-group">
                    <label for="contact_description">Description</label>
                    <textarea class="form-control" name="sections[3][description]">{{ $page['content']['sections'][3]['description'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="contact_email">Email</label>
                    <input type="text" class="form-control" name="sections[3][contact_details][email]" value="{{ $page['content']['sections'][3]['contact_details']['email'] }}">
                </div>
                <div class="form-group">
                    <label for="contact_phone">Phone</label>
                    <input type="text" class="form-control" name="sections[3][contact_details][phone]" value="{{ $page['content']['sections'][3]['contact_details']['phone'] }}">
                </div>
                <div class="form-group">
                    <label for="contact_address">Address</label>
                    <input type="text" class="form-control" name="sections[3][contact_details][address]" value="{{ $page['content']['sections'][3]['contact_details']['address'] }}">
                </div>
                @foreach ($page['content']['sections'][3]['social_links'] as $platform => $link)
                    <div class="form-group">
                        <label for="contact_social_{{ $platform }}">{{ ucfirst($platform) }} Link</label>
                        <input type="text" class="form-control" name="sections[3][social_links][{{ $platform }}]" value="{{ $link }}">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
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
