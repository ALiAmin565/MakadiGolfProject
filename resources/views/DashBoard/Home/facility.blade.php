<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> Facility Section Setting </h1>
        <form class="forms-sample" action={{ route('home-page-facility.update',$facilityPage->id ) }} method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- title --}}
            <x-dash-board.text-input title="FacilityTitle" name="title" :value="$facilityPage->title" :readonly="true" />
            {{-- Subtitle --}}
            <x-dash-board.text-input title="FacilitySubtitle" name="sub_title" :value="$facilityPage->sub_title" :readonly="true" />
            {{-- Description --}}
            <x-dash-board.text-area title="FacilityDescription" name="description" :value="$facilityPage->description" :readonly="true" />
            <button type="submit" id="submitButtonFacility" class="btn btn-gradient-primary me-2"
                style="display: none;">Submit</button>
        </form>
        <button type="button" id="editButtonFacility" class="btn btn-gradient-light me-2">Edit</button>
        <button type="button" class="btn btn-gradient-danger me-2" id="cancelButtonFacility" style="display: none;"><a
                href="{{ route('home-page-facility.index') }}"
                style="text-decoration: none; color:white;">Cancel</a></button>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const editButtonFacility = document.getElementById('editButtonFacility');
                const submitButtonFacility = document.getElementById('submitButtonFacility');
                const cancelButtonFacility = document.getElementById('cancelButtonFacility');
                editButtonFacility.addEventListener('click', function() {
                    enableEditing();
                });

                function enableEditing() {
                    const textInputsFacility = document.querySelectorAll('input[type="text"]');
                    const textAreasFacility = document.querySelectorAll('textarea');
                    // const imageInput = document.querySelector('input[type="file"]');

                    textInputsFacility.forEach(input => {
                        input.removeAttribute('readonly');
                    });

                    textAreasFacility.forEach(textarea => {
                        textarea.removeAttribute('readonly');
                    });

                    // imageInput.removeAttribute('disabled');
                    // Show the submit button
                    submitButtonFacility.style.display = 'block';
                    submitButtonFacility.style.float = 'right';
                    // Hide the edit button
                    editButtonFacility.style.display = 'none';
                    // Show the cancel button
                    cancelButtonFacility.style.display = 'block';

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
