<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> About Us Edit </h1>
        <form class="forms-sample" action="{{ route('about-us-dashboard.update',$aboutUs->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- title --}}
            <x-dash-board.text-input title="AboutUsTitle" name="title" :value="$aboutUs->title" :readonly="true" />

            {{-- Subtitle --}}
            <x-dash-board.text-input title="AboutUsSubtitle" name="sub_title" :value="$aboutUs->sub_title" :readonly="true" />

            {{-- Description --}}
            <x-dash-board.text-area title="AboutUsDescription" name="description" :value="$aboutUs->description" :readonly="true" />

            {{-- Youtube Link --}}
            <x-dash-board.text-input title="AboutUsYoutubeLink" name="youtube_link" :value="$aboutUs->youtube_link"
                :readonly="true" />

            {{-- Number of Years  --}}
            <x-dash-board.number-input title="AboutUsNumberOfYears" name="num_of_years" :value="$aboutUs->num_of_years"
                :readonly="true" />

            {{-- Image --}}
            <x-dash-board.upload-image title="aboutUsImage" name="image" :disabled="true" />
            <div class="text-center">
                <img src="{{ asset('assetsFront/images/'.$aboutUs->image) }}" id="aboutUsImageShow" alt=""
                    calss="m-auto" height="100px">
            </div>

            <button type="submit" id="submitButtonFacility" class="btn btn-gradient-primary me-2"
                style="display: none;">Submit</button>
        </form>
        <button type="button" id="editButtonFacility" class="btn btn-gradient-light me-2">Edit</button>
        <button type="button" class="btn btn-gradient-danger me-2" id="cancelButtonFacility" style="display: none;"><a
                href="{{ route('about-us-dashboard.index') }}"
                style="text-decoration: none; color:white;">Cancel</a></button>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const editButtonFacility = document.getElementById('editButtonFacility');
                const submitButtonFacility = document.getElementById('submitButtonFacility');
                const cancelButtonFacility = document.getElementById('cancelButtonFacility');
                const imageAboutUs = document.getElementById('aboutUsImage');

                editButtonFacility.addEventListener('click', function() {
                    enableEditing();
                });

                function enableEditing() {
                    const textInputsFacility = document.querySelectorAll('input[type="text"]');
                    const numberInputsFacility = document.querySelectorAll('input[type="number"]');
                    const textAreasFacility = document.querySelectorAll('textarea');
                    // const imageInput = document.querySelector('input[type="file"]');

                    textInputsFacility.forEach(input => {
                        input.removeAttribute('readonly');
                    });

                    numberInputsFacility.forEach(input => {
                        input.removeAttribute('readonly');
                    });

                    textAreasFacility.forEach(textarea => {
                        textarea.removeAttribute('readonly');
                    });



                    imageAboutUs.removeAttribute('disabled');
                    // Show the submit button
                    submitButtonFacility.style.display = 'block';
                    submitButtonFacility.style.float = 'right';
                    // Hide the edit button
                    editButtonFacility.style.display = 'none';
                    // Show the cancel button
                    cancelButtonFacility.style.display = 'block';

                }

            });

            document.addEventListener('DOMContentLoaded', function() {
                const imageAboutUs = document.getElementById('aboutUsImage');
                const aboutUsImage = document.getElementById('aboutUsImageShow');


                imageAboutUs.addEventListener('change', function(event) {
                    const selectedImage = event.target.files[0];
                    if (selectedImage) {
                        const imageUrl = URL.createObjectURL(selectedImage);
                        aboutUsImage.src = imageUrl;
                    }
                });


            });
        </script>
    @endpush
</x-dash-board.layouts.app>
