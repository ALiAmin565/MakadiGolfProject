<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> Create Partner </h1>
        <form class="forms-sample" action={{ route('partners.store') }} method="post" enctype="multipart/form-data">
            @csrf
            {{-- Name --}}
            <x-dash-board.text-input title="PartnerName" name="title" />
            {{-- Description --}}
            <x-dash-board.text-area title="PartnerDescription" name="description" />
            {{--  Link --}}
            <x-dash-board.text-input title="PartnerLink" name="link" />
            {{-- Stars Count --}}
            <x-dash-board.numbers-input title="Stars Number" name="stars_count" />
            {{-- Image --}}
            <x-dash-board.upload-image title="SinglePartnerImage" name="image" />
            <div class="text-center">
                <img src="" id="singlePartnerImageShow" alt="" calss="m-auto" height="100px">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-gradient-primary m-2 ">Submit</button>
            </div>
        </form>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const imageInputSinglePartner = document.getElementById('SinglePartnerImage');
                const singlePartnerImage = document.getElementById('singlePartnerImageShow');

                imageInputSinglePartner.addEventListener('change', function(event) {
                    const selectedImage = event.target.files[0];
                    if (selectedImage) {
                        const imageUrl = URL.createObjectURL(selectedImage);
                        singlePartnerImage.src = imageUrl;
                    }
                });
            });
        </script>
    @endpush
</x-dash-board.layouts.app>
