<x-dash-board.layouts.app>
    <div class="content-wrapper">
        @if (session()->has('success'))
        <div class="alert alert-primary text-center">{{ session()->get('success') }}</div>
        @endif
        <h1 class="text-center"> John Sanford Page Edit </h1>
        @foreach (['title', 'description', 'image'] as $field)
            @error($field)
                <div class="alert alert-danger text-center">{{ $message }}</div>
            @enderror
        @endforeach
        <form class="forms-sample" action="{{ route('john-sanford.update', $johnSanford->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- title --}}
            <x-dash-board.text-input title="johnSanfordTitle" name="title" :value="$johnSanford->title" />
            {{-- Description --}}
            <x-dash-board.text-area title="johnSanfordDescription" name="description" :value="$johnSanford->description" />
            {{-- Image --}}
            <x-dash-board.upload-image title="johnSanfordImage" name="image" :value="$johnSanford->image" />
            <div class="text-center">
                <img src="{{ asset('assetsFront/images/' . $johnSanford->image) }}" id="aboutUsImageShow" alt=""
                    calss="m-auto" height="100px">
            </div>

            <button type="submit" id="submitButtonFacility" class="btn btn-gradient-primary me-2"
                style="position: relative;right: -90%">Submit</button>
        </form>
    </div>

    @push('scripts')
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
    @endpush
</x-dash-board.layouts.app>
