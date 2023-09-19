<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> Create Facility </h1>
        <form class="forms-sample" action={{ route('facilities.store') }} method="post" enctype="multipart/form-data">
            @csrf
            {{-- Name --}}
            <x-dash-board.text-input title="FacilityName" name="name" />
            {{-- Description --}}
            <x-dash-board.text-area title="FacilityDescription" name="description" />
            {{-- Youtube Link --}}
            <x-dash-board.text-input title="FacilityYoutubeLink" name="youtube_link" />
            {{-- Icons --}}
            <x-dash-board.select-icon-drop-down name="icon" label="Icons">
                <option value="golftio-file">golftio-file</option>
                <option value="golftio-cart">golftio-cart</option>
                <option value="golftio-flag">golftio-flag</option>
                <option value="golftio-pin-location">golftio-pin-location</option>
                <option value="golftio-phone">golftio-phone</option>
                <option value="golftio-user-shield">golftio-user-shield</option>
                <option value="golftio-shot-done">golftio-shot-done</option>
                <option value="golftio-user">golftio-user</option>
                <option value="golftio-radio">golftio-radio</option>
                <option value="golftio-minus">golftio-minus</option>
                <option value="golftio-close">golftio-close</option>
                <option value="golftio-check">golftio-check</option>
                <option value="golftio-long-right-arrow">golftio-long-right-arrow</option>
                <option value="golftio-trophy">golftio-trophy</option>
                <option value="golftio-shot-down">golftio-shot-down </option>
                <option value="golftio-email">golftio-email</option>
                <option value="golftio-plus">golftio-plus</option>
                <option value="golftio-hands">golftio-hands </option>
                <option value="golftio-magnifying">golftio-magnifying</option>
                <option value="golftio-quote">golftio-quote</option>
                <option value="golftio-location">golftio-location</option>
                <option value="golftio-users">golftio-users</option>
                <option value="golftio-shot-upper">golftio-shot-upper</option>
                <option value="golftio-printer">golftio-printer</option>
                <option value="golftio-star">golftio-star</option>
                <option value="golftio-pin-checked">golftio-pin-checked</option>
                <option value="golftio-shot-ground">golftio-shot-ground</option>
                <option value="golftio-download">golftio-download</option>
                <option value="golftio-paper-plane">golftio-paper-plane</option>
                <option value="golftio-gym">golftio-gym</option>
                <option value="golftio-shot-great-upper">golftio-shot-great-upper</option>
                <option value="golftio-sticks">golftio-sticks</option>
                <option value="golftio-flag">golftio-flag</option>
                <option value="golftio-ball">golftio-ball</option>
            </x-dash-board.select-icon-drop-down>
            <br>
            {{-- Image --}}
            <x-dash-board.upload-image title="SingleFacilityImage" name="image" />
            <div class="text-center">
                <img src="" id="singleFacilityImageShow" alt="" calss="m-auto" height="100px">
            </div>
            {{-- Images  --}}
            <x-dash-board.upload-image title="FacilityGallery" name="images[]" :multiple="true" />
            <div class="text-center">
                <!-- Container for displaying uploaded images -->
                <div id="uploadedImages"></div>
            </div>
            {{-- Add Partners  --}}
            <x-dash-board.select-icon-drop-down  name="partners[]" label="Add partner" :multiple="true"  >
                @foreach ($partners as $partner)
                    <option value="{{ $partner->id }}">{{ $partner->title }}</option>
                @endforeach
            </x-dash-board.select-icon-drop-down>
            {{-- Submit --}}
            <div class="text-center">
                <button type="submit" class="btn btn-gradient-primary m-2 ">Submit</button>
            </div>
        </form>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const imageInputSingleFacility = document.getElementById('SingleFacilityImage');
                const singleFacilityImage = document.getElementById('singleFacilityImageShow');

                imageInputSingleFacility.addEventListener('change', function(event) {
                    const selectedImage = event.target.files[0];
                    if (selectedImage) {
                        const imageUrl = URL.createObjectURL(selectedImage);
                        singleFacilityImage.src = imageUrl;
                    }
                });
            });
            const allImagesInput = document.getElementById('FacilityGallery');
            const uploadedImagesContainer = document.getElementById('uploadedImages');

            allImagesInput.addEventListener('change', function(event) {
                uploadedImagesContainer.innerHTML = ''; // Clear previous images

                const selectedImages = event.target.files;
                for (let i = 0; i < selectedImages.length; i++) {
                    const imageUrl = URL.createObjectURL(selectedImages[i]);
                    const imgElement = document.createElement('img');
                    imgElement.src = imageUrl;
                    imgElement.alt = 'Uploaded Image';
                    imgElement.style.maxHeight = '100px'; // Adjust the height as needed
                    imgElement.style.width = '25%'; // Adjust the height as needed
                    imgElement.style.objectFit = 'contain';
                    uploadedImagesContainer.appendChild(imgElement);
                }
            });
        </script>
    @endpush
</x-dash-board.layouts.app>
