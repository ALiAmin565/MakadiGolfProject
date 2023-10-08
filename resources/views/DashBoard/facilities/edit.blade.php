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
        @if (session()->has('success'))
            <div class="alert alert-primary text-center">{{ session()->get('success') }}</div>
        @endif
        <h1 class="text-center"> Edit {{ $facility->name }} </h1>
        <form class="forms-sample" action={{ route('facilities.update', $facility->id) }} method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <x-dash-board.text-input title="FacilityName" name="name" :value="$facility->name" />
            {{-- Description --}}
            <x-dash-board.text-area title="FacilityDescription" name="description" :value="$facility->description" />
            {{-- Youtube Link --}}
            <x-dash-board.text-input title="FacilityYoutubeLink" name="youtube_link" :value="$facility->youtube_link" />
            @php
                $iconValues = ['golftio-file', 'golftio-cart', 'golftio-flag', 'golftio-pin-location', 'golftio-phone', 'golftio-user-shield', 'golftio-shot-done', 'golftio-user', 'golftio-radio', 'golftio-minus', 'golftio-close', 'golftio-check', 'golftio-long-right-arrow', 'golftio-trophy', 'golftio-shot-down', 'golftio-email', 'golftio-plus', 'golftio-hands', 'golftio-magnifying', 'golftio-quote', 'golftio-location', 'golftio-users', 'golftio-shot-upper', 'golftio-printer', 'golftio-star', 'golftio-pin-checked', 'golftio-shot-ground', 'golftio-download', 'golftio-paper-plane', 'golftio-gym', 'golftio-shot-great-upper', 'golftio-sticks', 'golftio-flag', 'golftio-ball'];
                
                // Assuming $selectedValue contains the value from the database
                $selectedValue = $facility->icon; // Replace with the actual value from the database
            @endphp
            {{-- Icons --}}
            <x-dash-board.select-icon-drop-down name="icon" label="Icons">
                @foreach ($iconValues as $iconValue)
                    <option value="{{ $iconValue }}" @if ($selectedValue === $iconValue) selected @endif>
                        {{ $iconValue }}</option>
                @endforeach
            </x-dash-board.select-icon-drop-down>
            <br>
            {{-- Image --}}
            <x-dash-board.upload-image title="SingleFacilityImage" name="image" />
            <div class="text-center">
                <img src="{{ asset('assetsFront/images/facility/' . $facility->image) }}" id="singleFacilityImageShow"
                    alt="" calss="m-auto" height="100px">
            </div>
            <br>
            <x-dash-board.select-icon-drop-down name="partners[]" label="Add partner" :multiple="true">
                @foreach ($partners as $partner)
                    <option value="{{ $partner->id }}" @if (in_array($partner->id, $facilityPartnersIds)) selected @endif>
                        {{ $partner->title }}</option>
                @endforeach
            </x-dash-board.select-icon-drop-down>
            {{-- Images --}}
            @if ($facilityImages == [])
                <x-dash-board.upload-image title="FacilityImages" name="images[]" :multiple="true" />
            @else
                <div class="text-center">
                    <h2>Edit Your Gallery</h2>
                    @foreach ($facilityImages as $facilityImage)
                        <div class="image-container">
                            <div class="image-wrapper">
                                <img src="{{ asset('assetsFront/images/facility/images/' . $facilityImage) }}"
                                    id="facilityImagesShow" alt="" class="m-auto w-100" height="200px">
                                <a href="{{ route('deleteSelectedImage', ['imageName' => $facilityImage]) }}"
                                    class="delete-link"
                                    onclick="return confirm('Are you sure you want to delete this image?');">
                                    <i class="fas fa-trash"></i>Delete
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            {{-- Submit --}}
            <button type="submit" class="btn btn-gradient-primary m-2"
                style="position: relative;right: -90%;">Submit</button>
        </form>

        <!-- Add Image Link -->
        @if ($facilityImages != [])
            <br>
            <div id="uplaodNewPhoto">
                <h2>Add New Photo</h2>
                <form action="{{ route('addImageFacility', $facility->id) }}" method="POST"
                    enctype="multipart/form-data" id="imageUploadForm">
                    @csrf
                    <div class="add-image-link">
                        <input type="file" id="addImageFacility" name="images[]" accept="image/*" multiple>
                        <a href="#" style="text-decoration: none; color:white;"> <button type="submit"
                                id="submitButtonImageFacility" class="btn btn-gradient-primary me-2">Add new
                                photo</button></a>
                    </div>
                </form>
            </div>
            <div class="text-center">
                <img src="" id="galleryImageShow" alt="" calss="m-auto" height="100px">
            </div>
        @endif
        <br>
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
            const fileInputImageFacility = document.getElementById('addImageFacility');
            const submitButtonImageFacility = document.getElementById('submitButtonImageFacility');
            document.getElementById('imageUploadForm').addEventListener('submit', function(event) {
                // Check if no file is selected
                if (fileInputImageFacility.files.length === 0) {
                    // Prevent the default form submission
                    event.preventDefault();
                    // Optionally, display an alert or message to inform the user
                    alert('Please select a file before submitting.');
                }
            });
            fileInputImageFacility.addEventListener('change', function() {
                // Check if any file is selected
                if (fileInputImageFacility.files.length > 0) {
                    // Enable the submit button if a file is selected
                    submitButtonImageFacility.disabled = false;
                } else {
                    // Disable the submit button if no file is selected
                    submitButtonImageFacility.disabled = true;
                }
            });


            document.addEventListener('DOMContentLoaded', function() {
                const imageAboutUs = document.getElementById('addImageFacility');
                const galleryImage = document.getElementById('galleryImageShow');


                imageAboutUs.addEventListener('change', function(event) {
                    const selectedImage = event.target.files[0];
                    if (selectedImage) {
                        const imageUrl = URL.createObjectURL(selectedImage);
                        galleryImage.src = imageUrl;
                    }
                });


            });
        </script>
    @endpush
</x-dash-board.layouts.app>
