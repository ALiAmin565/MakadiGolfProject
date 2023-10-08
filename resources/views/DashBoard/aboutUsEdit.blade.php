<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> About Us Edit </h1>
        @foreach (['title', 'description', 'image', 'sub_title', 'num_of_years'] as $field)
            @error($field)
                <div class="alert alert-danger text-center">{{ $message }}</div>
            @enderror
        @endforeach
        @if (session()->has('success'))
            <div class="alert alert-primary text-center">{{ session()->get('success') }}</div>
        @endif
        <form class="forms-sample" action="{{ route('about-us-dashboard.update', $aboutUs->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- title --}}
            <x-dash-board.text-input title="AboutUsTitle" name="title" :value="$aboutUs->title" />

            {{-- Subtitle --}}
            <x-dash-board.text-input title="AboutUsSubtitle" name="sub_title" :value="$aboutUs->sub_title" />

            {{-- Description --}}
            <x-dash-board.text-area title="AboutUsDescription" name="description" :value="$aboutUs->description" />

            {{-- Youtube Link --}}
            <x-dash-board.text-input title="AboutUsYoutubeLink" name="youtube_link" :value="$aboutUs->youtube_link" />

            {{-- Number of Years  --}}
            <x-dash-board.number-input title="AboutUsNumberOfYears" name="num_of_years" :value="$aboutUs->num_of_years" />

            {{-- Image --}}
            <x-dash-board.upload-image title="aboutUsImage" name="image" />
            <div class="text-center">
                <img src="{{ asset('assetsFront/images/' . $aboutUs->image) }}" id="aboutUsImageShow" alt=""
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
