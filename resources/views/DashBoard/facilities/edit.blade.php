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
        <h1 class="text-center"> Edit {{ $facility->name }} </h1>
        <form class="forms-sample" action={{ route('facilities.update', $facility->id) }} method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <x-dash-board.text-input title="FacilityName" name="name" :value="$facility->name" :readonly="true" />
            {{-- Description --}}
            <x-dash-board.text-area title="FacilityDescription" name="description" :value="$facility->description" :readonly="true" />
            {{-- Youtube Link --}}
            <x-dash-board.text-input title="FacilityYoutubeLink" name="youtube_link" :value="$facility->youtube_link"
                :readonly="true" />
            {{-- Icons --}}
            <x-dash-board.select-icon-drop-down name="icon" label="Icons" :disabled="true">
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
            <x-dash-board.upload-image title="SingleFacilityImage" name="image" :disabled="true" />
            <div class="text-center">
                <img src="{{ asset('assetsFront/images/facility/' . $facility->image) }}" id="singleFacilityImageShow"
                    alt="" calss="m-auto" height="100px">
            </div>
            <br>
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
            <button type="submit" id="submitButtonSingleFacility" class="btn btn-gradient-primary m-2"
                style="display: none;">Submit</button>
        </form>

        <button type="button" class="btn btn-gradient-danger me-2" id="cancelButtonSingleFacility"
            style="display: none;"><a href="{{ route('facilities.edit', $facility->id) }}"
                style="text-decoration: none; color:white;">Cancel</a></button>


        <!-- Add Image Link -->
        @if ($facilityImages != [])
            <br>
            <h2>For New Photo</h2>
            <form action="{{ route('addImageFacility', $facility->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="add-image-link">
                    <input type="file" id="addImageFacility" name="images[]" accept="image/*" multiple>
                    <a href="#" style="text-decoration: none; color:white;"> <button type="submit"
                            class="btn btn-gradient-primary me-2">Add new photo</button></a>
                </div>
            </form>
        @endif
        <br>
        <button type="button" id="editButtonSingleFacility" class="btn btn-gradient-light me-2">Edit</button>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const addImageLink = document.getElementById('addImageLink');
                const addImageInput = document.getElementById('addImageInput');

                addImageLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    addImageInput.click();
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const editButtonSingleFacility = document.getElementById('editButtonSingleFacility');
                const submitButtonSingleFacility = document.getElementById('submitButtonSingleFacility');
                const cancelButtonSingleFacility = document.getElementById('cancelButtonSingleFacility');
                editButtonSingleFacility.addEventListener('click', function() {
                    enableEditing();
                });
                editButtonSingleFacility.style.float = 'right';

                function enableEditing() {
                    const textInputsSingleFacility = document.querySelectorAll('input[type="text"]');
                    const textAreasSingleFacility = document.querySelectorAll('textarea');
                    const imageInputSingleFacility = document.querySelector('input[type="file"]');
                    const selectIconSingleFacility = document.getElementById('icon');

                    textInputsSingleFacility.forEach(input => {
                        input.removeAttribute('readonly');
                    });

                    textAreasSingleFacility.forEach(textarea => {
                        textarea.removeAttribute('readonly');
                    });


                    selectIconSingleFacility.removeAttribute('disabled');


                    imageInputSingleFacility.removeAttribute('disabled');


                    // Show the submit button
                    submitButtonSingleFacility.style.display = 'block';
                    submitButtonSingleFacility.style.float = 'right';
                    // Hide the edit button
                    editButtonSingleFacility.style.display = 'none';
                    // Show the cancel button
                    cancelButtonSingleFacility.style.display = 'block';

                }

            });
        </script>
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
        </script>
    @endpush
</x-dash-board.layouts.app>
