<x-dash-board.layouts.app>
    @if (session()->has('success'))
    <div class="alert alert-primary text-center">{{ session()->get('success') }}</div>
    @endif
    <div class="content-wrapper">
        <h1 class="text-center"> John Sanford Page Edit </h1>
        {{-- @foreach (['title', 'description', 'image'] as $field) --}}
            {{-- @error($field)
                <div class="alert alert-danger text-center">{{ $message }}</div>
            @enderror
        @endforeach --}}
        <form class="forms-sample" action="{{ route('john-sanford-pdfs-store') }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <label for="pdf" class="d-block m-4">Select PDF File Factsheet:</label>
            <input type="file" name="pdf_fact_sheet" accept=".pdf" class="form-control">
            <br>
            <label for="pdf" class="d-block m-4">Select PDF File Rating:</label>
            <input type="file" name="pdf_rating" accept=".pdf" class="form-control">
            <br>
            <button type="submit" id="submitButtonFacility" class="btn btn-gradient-primary me-2"
                style="position: relative;right: -90%">Submit</button>
        </form>
    </div>

    {{-- @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const imageAboutUs = document.getElementById('aboutUsImage');
                const aboutUsImage = document.getElementById('aboutUsImageShow');
                imageAboutUs.addEventListener('change', function(event) {
                    const selectedImage = event.target.files[0];
                    if (selectedImage) {
                        const imageUrl = URL.createObjectURL(selectedImage);
                        aboutUsImage.src = imageUrl;
                    }
                });
            });
        </script>
    @endpush --}}
</x-dash-board.layouts.app>
