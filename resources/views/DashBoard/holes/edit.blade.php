<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> Edit {{ $hole->title }} </h1>
        @foreach (['title', 'sub_title', 'description', 'image'] as $field)
            @error($field)
                <div class="alert alert-danger text-center">{{ $message }}</div>
            @enderror
        @endforeach
        <form class="forms-sample" action={{ route('john-sanford-holes.update', $hole->id) }} method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- Name --}}
            <x-dash-board.text-input title="holeTitle" name="title" :value="$hole->title" />
            {{-- Description --}}
            <x-dash-board.text-area title="FacilityDescription" name="description" :value="$hole->description" />
            {{-- Image --}}
            <x-dash-board.upload-image title="holeImage" name="image" />
            <div class="text-center">
                <img src="{{ asset('assetsFront/images/holes/' . $hole->image) }}" id="holeImageShow" alt=""
                    calss="m-auto" height="100px">
            </div>
            {{-- Logo --}}
            <x-dash-board.upload-image title="holeLogo" name="logo"  />
            <div class="text-center">
                <img src="{{ asset('assetsFront/images/holes/' . $hole->logo) }}" id="holeLogoShow" alt=""
                    calss="m-auto" height="100px">
            </div>

            {{-- Submit --}}
            <button type="submit" class="btn btn-gradient-primary m-2"
                style="position: relative;right: -90%;">Submit</button>
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
