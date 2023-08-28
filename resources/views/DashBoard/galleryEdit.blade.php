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
        {{-- Images --}}
        {{-- @dd($galleries); --}}
        @if (count($galleries) == 0)
            <div class="text-center">
                <form action={{ route('gallery-dashboard.store') }} method="post" enctype="multipart/form-data">
                    @csrf
                    <h2>Upload Your Gallery</h2>
                    <x-dash-board.upload-image title="Gallery" name="images[]" :multiple="true" />
                    <button type="submit" class="btn btn-gradient-primary me-2">Upload</button>
                    <div class="text-center m-2">
                        <span> Min 10 images </span>
                    </div>
                </form>
            </div>
            <div id="uploadedImages" ></div>
        @else
            <div class="text-center">
                <h2>Edit Your Gallery</h2>
                @foreach ($galleries as $images)
                    <div class="image-container">
                        <div class="image-wrapper">
                            <img src="{{ asset('assetsFront/images/gallery/images/' . $images->image) }}"
                                id="galleriesShow" alt="" class="m-auto w-100" height="200px">
                            <form action="{{ route('gallery-dashboard.destroy', $images->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-link"> <a
                                        onclick="return confirm('Are you sure you want to delete this image?');">
                                        <i class="fas fa-trash"></i>Delete
                                    </a></button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        {{-- Images End --}}
        <!-- Add Image Link -->
        @if (count($galleries) >= 1)
            <br>
            <div id="uplaodNewPhoto">
                <h2>Add New Photo</h2>
                <form action="{{ route('gallery-dashboard.store') }}" method="POST" enctype="multipart/form-data"
                    id="imageUploadForm">
                    @csrf
                    <div class="add-image-link">
                        <input type="file" id="addImageGallery" name="images[]" accept="image/*" multiple>
                        <a href="#" style="text-decoration: none; color:white;"> <button type="submit"
                                id="submitButtonImageGallery" class="btn btn-gradient-primary me-2">Add new
                                photo</button></a>
                    </div>
                </form>
            </div>
            <div class="text-center">
                <img src="" id="galleryImageShow" alt="" calss="m-auto" height="100px">
            </div>
        @endif
    </div>
    @push('scripts')
        @if (count($galleries) >= 1)
            <script>
                const fileInputImageGallery = document.getElementById('addImageGallery');
                const submitButtonImageGallery = document.getElementById('submitButtonImageGallery');
                document.getElementById('imageUploadForm').addEventListener('submit', function(event) {
                    // Check if no file is selected
                    if (fileInputImageGallery.files.length === 0) {
                        // Prevent the default form submission
                        event.preventDefault();
                        // Optionally, display an alert or message to inform the user
                        alert('Please select a file before submitting.');
                    }
                });

                fileInputImageGallery.addEventListener('change', function() { // Check if any file is
                    selected
                    if (fileInputImageGallery.files.length >
                        0) {
                        // Enable the submit button if a file is selected
                        submitButtonImageGallery.disabled = false;
                    } else {
                        // Disable the submit button if no file is selected
                        submitButtonImageGallery.disabled = true;
                    }
                });

                document.addEventListener('DOMContentLoaded', function() {
                    const imageAboutUs = document.getElementById('addImageGallery');
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
        @endif
        <script>
            const allImagesInputGallery = document.getElementById('Gallery');
            const uploadedImagesContainerGallery = document.getElementById('uploadedImages');

            allImagesInputGallery.addEventListener('change', function(event) {
                uploadedImagesContainerGallery.innerHTML = ''; // Clear previous images

                const selectedImages = event.target.files;
                for (let i = 0; i < selectedImages.length; i++) {
                    const imageUrl = URL.createObjectURL(selectedImages[i]);
                    const
                    imgElement = document.createElement('img');
                    imgElement.src = imageUrl;
                    imgElement.alt = 'Uploaded Image';
                    imgElement.style.maxHeight = '100px';
                    imgElement.style.width = '25%';
                    imgElement.style.objectFit = 'contain';
                    uploadedImagesContainerGallery.appendChild(imgElement);
                }
            });
        </script>
    @endpush
</x-dash-board.layouts.app>
