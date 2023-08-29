<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> Contact Us Edit </h1>
        <form class="forms-sample" action="{{ route('contact-us-dashboard.update', $contactUs->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- title --}}
            <x-dash-board.text-input title="Title" name="title" :value="$contactUs->title" :readonly="true" />
            {{-- description --}}
            <x-dash-board.text-area title="Description" name="description" :value="$contactUs->description"
                :readonly="true" />
            {{-- numbers --}}
            <x-dash-board.text-area title="All-numbers" name="numbers" :value="$contactUs->numbers"
                :readonly="true" />
            {{-- emails --}}
            <x-dash-board.text-area title="All-emails" name="emails" :value="$contactUs->emails"
                :readonly="true" />
            {{-- location --}}
            <x-dash-board.text-area title="Location" name="location" :value="$contactUs->location"
                :readonly="true" />
            {{-- google_map_link --}}
            <x-dash-board.text-input title="Google-Map-Link" name="google_map_link" :value="$contactUs->google_map_link" :readonly="true" />

            <button type="submit" id="submitButtonFacility" class="btn btn-gradient-primary me-2"
                style="display: none;">Submit</button>
        </form>
        <button type="button" id="editButtonFacility" class="btn btn-gradient-light me-2">Edit</button>
        <button type="button" class="btn btn-gradient-danger me-2" id="cancelButtonFacility" style="display: none;"><a
                href="{{ route('contact-us-dashboard.index') }}"
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
                    const numberInputsFacility = document.querySelectorAll('input[type="number"]');
                    const textAreasFacility = document.querySelectorAll('textarea');
                    textInputsFacility.forEach(input => {
                        input.removeAttribute('readonly');
                    });
                    numberInputsFacility.forEach(input => {
                        input.removeAttribute('readonly');
                    });
                    textAreasFacility.forEach(textarea => {
                        textarea.removeAttribute('readonly');
                    });
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
    @endpush
</x-dash-board.layouts.app>