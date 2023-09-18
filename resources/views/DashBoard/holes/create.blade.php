<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> Create Facility </h1>
        @foreach (['title', 'description' , 'image' , 'logo'] as $field)
            @error($field)
                <div class="alert alert-danger text-center">{{ $message }}</div>
            @enderror
        @endforeach
        <form class="forms-sample" action={{ route('john-sanford-holes.store') }} method="post"
            enctype="multipart/form-data">
            @csrf
            {{-- Name --}}
            <x-dash-board.text-input title="holeTitle" name="title" />
            {{-- Description --}}
            <x-dash-board.text-area title="holeDescription" name="description" />
            <br>
            {{-- Image --}}
            <x-dash-board.upload-image title="holeImage" name="image" />
            <div class="text-center">
                <img src="" id="holeImageShow" alt="" calss="m-auto" height="100px">
            </div>
            {{-- Logo --}}
            <x-dash-board.upload-image title="holeLogo" name="logo" />
            <div class="text-center">
                <img src="" id="holeLogoShow" alt="" calss="m-auto" height="100px">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-gradient-primary m-2 ">Submit</button>
            </div>
        </form>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const holeImage = document.getElementById('holeImage');
                const holeImageShow = document.getElementById('holeImageShow');

                holeImage.addEventListener('change', function(event) {
                    const selectedImage = event.target.files[0];
                    if (selectedImage) {
                        const imageUrl = URL.createObjectURL(selectedImage);
                        holeImageShow.src = imageUrl;
                    }
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
                const holeLogo = document.getElementById('holeLogo');
                const holeLogoShow = document.getElementById('holeLogoShow');

                holeLogo.addEventListener('change', function(event) {
                    const selectedImage = event.target.files[0];
                    if (selectedImage) {
                        const imageUrl = URL.createObjectURL(selectedImage);
                        holeLogoShow.src = imageUrl;
                    }
                });
            });
        </script>
    @endpush
</x-dash-board.layouts.app>
