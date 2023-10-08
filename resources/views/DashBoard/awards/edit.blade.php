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
        @foreach (['image'] as $field)
            @error($field)
                <div class="alert alert-danger text-center">{{ $message }}</div>
            @enderror
        @endforeach
        <h1 class="text-center"> Edit {{ $award->name }} </h1>
        <form class="forms-sample" action={{ route('awards.update', $award->id) }} method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <x-dash-board.text-input title="AwardName" name="title" :value="$award->name" />
            {{-- Description --}}
            <x-dash-board.text-area title="AwardDescription" name="description" :value="$award->description" />
            {{--  Link --}}
            <x-dash-board.text-input title="AwardLink" name="link" :value="$award->link" />
            {{-- Image --}}
            <x-dash-board.upload-image title="SingleAwardImage" name="image" />
            <div class="text-center">
                <img src="{{ asset('assetsFront/images/awards/' . $award->image) }}" id="singleawardImageShow"
                    alt="" calss="m-auto" height="150px" style="width: 50%; object-fit:cover;">
            </div>
            {{-- Submit --}}
            <button type="submit" class="btn btn-gradient-primary m-2"
                style="position: relative;right: -90%;">Submit</button>
        </form>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const imageInputSingleAward = document.getElementById('SingleAwardImage');
                const singleAwardImage = document.getElementById('singleawardImageShow');
                imageInputSingleAward.addEventListener('change', function(event) {
                    const selectedImage = event.target.files[0];
                    if (selectedImage) {
                        const imageUrl = URL.createObjectURL(selectedImage);
                        singleAwardImage.src = imageUrl;
                    }
                });
            });
        </script>
    @endpush
</x-dash-board.layouts.app>
