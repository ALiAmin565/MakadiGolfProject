<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> Banner Section Setting </h1>
        <form class="forms-sample" action={{ route('home-page-banner.update',$banner->id ) }} method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- title --}}
            <x-dash-board.text-input title="BannerTitle" name="title" :value="$banner->title" :readonly="true" />
            {{-- Subtitle --}}
            <x-dash-board.text-input title="BannerSubtitle" name="sub_title" :value="$banner->sub_title" :readonly="true" />
            {{-- Description --}}
            <x-dash-board.text-area title="BannerDescription" name="description" :value="$banner->description" :readonly="true" />
            {{-- Image --}}
            <x-dash-board.upload-image title="BannerImage" name="image" :disabled="true" />
            <br>
            <div class="text-center">
                <img src="{{ asset('assetsFront/images/banner/' . $banner->image) }}" id="bannerImageShow"
                    alt="" calss="m-auto" height="100px">
            </div>
            <button type="submit" id="submitButton" class="btn btn-gradient-primary me-2"
                style="display: none;">Submit</button>
        </form>
        <button type="button" id="editButton" class="btn btn-gradient-light me-2">Edit</button>
        <button type="button" class="btn btn-gradient-danger me-2" id="cancelButton" style="display: none;"><a
                href="{{ route('home-page-banner.index') }}"
                style="text-decoration: none; color:white;">Cancel</a></button>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const editButton = document.getElementById('editButton');
                const submitButton = document.getElementById('submitButton');
                const cancelButton = document.getElementById('cancelButton');
                editButton.addEventListener('click', function() {
                    enableEditing();
                });

                function enableEditing() {
                    const textInputs = document.querySelectorAll('input[type="text"]');
                    const textAreas = document.querySelectorAll('textarea');
                    const imageInput = document.querySelector('input[type="file"]');

                    textInputs.forEach(input => {
                        input.removeAttribute('readonly');
                    });

                    textAreas.forEach(textarea => {
                        textarea.removeAttribute('readonly');
                    });

                    imageInput.removeAttribute('disabled');
                    // Show the submit button
                    submitButton.style.display = 'block';
                    submitButton.style.float = 'right';
                    // Hide the edit button
                    editButton.style.display = 'none';
                    // Show the cancel button
                    cancelButton.style.display = 'block';

                }

            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const imageInput = document.getElementById('BannerImage');
                const bannerImage = document.getElementById('bannerImageShow');

                imageInput.addEventListener('change', function(event) {
                    const selectedImage = event.target.files[0];
                    if (selectedImage) {
                        const imageUrl = URL.createObjectURL(selectedImage);
                        bannerImage.src = imageUrl;
                    }
                });
            });
        </script>
    @endpush
</x-dash-board.layouts.app>
