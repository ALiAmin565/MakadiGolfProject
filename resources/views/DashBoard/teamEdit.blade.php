<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> Team Section Edit </h1>
        @foreach (['title', 'description', 'image', 'sub_title', 'num_of_years'] as $field)
            @error($field)
                <div class="alert alert-danger text-center">{{ $message }}</div>
            @enderror
        @endforeach
        @if (session()->has('success'))
            <div class="alert alert-primary text-center">{{ session()->get('success') }}</div>
        @endif
        <form class="forms-sample" action="{{ route('team.update', $team->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- title --}}
            <x-dash-board.text-input title="SectionTitle" name="title" :value="$team->title" />

            {{-- Subtitle --}}
            <x-dash-board.text-input title="SectionSubtitle" name="sub_title" :value="$team->sub_title" />

            {{-- Description --}}
            <x-dash-board.text-area title="SectionDescription" name="description" :value="$team->description" />

            {{-- Image --}}
            <x-dash-board.upload-image title="aboutUsImage" name="image" />
            <div class="text-center">
                <img src="{{ asset('assetsFront/images/' . $team->image) }}" id="aboutUsImageShow" alt=""
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
