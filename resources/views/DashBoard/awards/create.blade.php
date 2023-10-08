<x-dash-board.layouts.app>
    <div class="content-wrapper">
        @foreach (['image'] as $field)
            @error($field)
                <div class="alert alert-danger text-center">{{ $message }}</div>
            @enderror
        @endforeach
        <h1 class="text-center"> Create Award </h1>
        <form class="forms-sample" action={{ route('awards.store') }} method="post" enctype="multipart/form-data">
            @csrf
            {{-- Name --}}
            <x-dash-board.text-input title="AwardName" name="title" />
            {{-- Description --}}
            <x-dash-board.text-area title="AwardDescription" name="description" />
            {{--  Link --}}
            <x-dash-board.text-input title="AwardLink" name="link" />
            {{-- Image --}}
            <x-dash-board.upload-image title="SingleAwardImage" name="image" />
            <div class="text-center">
                <img src="" id="singleAwardImageShow" alt="" calss="m-auto" height="100px">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-gradient-primary m-2 ">Submit</button>
            </div>
        </form>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const imageInputSingleAward = document.getElementById('SingleAwardImage');
                const singleAwardImage = document.getElementById('singleAwardImageShow');

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
