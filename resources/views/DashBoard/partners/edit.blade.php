<x-dash-board.layouts.app>
    @push('styles')
        <style>
            /* Add these styles to your CSS file or style section */
            .image-container {
                position: relative;
                display: inline-block;
                margin: 10px;
            }

            .image-wrapper {
                position: relative;
                width: 200px;
                /* Adjust the width and height as needed */
                height: 200px;
            }

            .delete-link {
                position: absolute;
                top: 10px;
                /* Adjust the top and right values to position the icon where you want */
                right: 10px;
                background: red;
                padding: 5px;
                border-radius: 50%;
                cursor: pointer;
                color: white;
                text-decoration: none;
            }
        </style>
    @endpush
    <div class="content-wrapper">
        @foreach (['title', 'description', 'link', 'stars_count', 'image'] as $field)
            @error($field)
                <div class="alert alert-danger text-center">{{ $message }}</div>
            @enderror
        @endforeach
        <h1 class="text-center"> Edit {{ $partner->name }} </h1>
        <form class="forms-sample" action={{ route('partners.update', $partner->id) }} method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <x-dash-board.text-input title="PartnerName" name="title" :value="$partner->title" />
            {{-- Description --}}
            <x-dash-board.text-area title="PartnerDescription" name="description" :value="$partner->description" />
            {{--  Link --}}
            <x-dash-board.text-input title="PartnerLink" name="link" :value="$partner->link" />
            {{-- Stars Count --}}
            <x-dash-board.numbers-input title="Stars Number" name="stars_count" :value="$partner->stars_count" />
            {{-- Image --}}
            <x-dash-board.upload-image title="SinglepartnerImage" name="image" />
            <div class="text-center">
                <img src="{{ asset('assetsFront/images/partners/' . $partner->image) }}" id="singlepartnerImageShow"
                    alt="" calss="m-auto" height="100px">
            </div>
            {{-- Submit --}}
            <button type="submit" class="btn btn-gradient-primary m-2"
                style="position: relative;right: -90%;">Submit</button>
        </form>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const imageInputSinglepartner = document.getElementById('SinglepartnerImage');
                const singlepartnerImage = document.getElementById('singlepartnerImageShow');
                imageInputSinglepartner.addEventListener('change', function(event) {
                    const selectedImage = event.target.files[0];
                    if (selectedImage) {
                        const imageUrl = URL.createObjectURL(selectedImage);
                        singlepartnerImage.src = imageUrl;
                    }
                });
            });
        </script>
    @endpush
</x-dash-board.layouts.app>
