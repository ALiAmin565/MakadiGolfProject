<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> Banner Section Setting </h1>
        <form class="forms-sample" action={{ route('home-page-banner.update', $banner->id) }} method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @foreach (['title', 'sub_title', 'description', 'image'] as $field)
                @error($field)
                    <div class="alert alert-danger text-center">{{ $message }}</div>
                @enderror
            @endforeach
            @if (session()->has('success'))
                <div class="alert alert-primary text-center">{{ session()->get('success') }}</div>
            @endif
            <x-dash-board.text-input title="BannerTitle" name="title" :value="$banner->title" :required="true" />
            <x-dash-board.text-input title="BannerSubtitle" name="sub_title" :value="$banner->sub_title" :required="true" />
            <x-dash-board.text-area title="BannerDescription" name="description" :value="$banner->description" :required="true" />
            <x-dash-board.upload-image title="BannerImage" name="image" />
            <br>
            <div class="text-center">
                <img src="{{ asset('assetsFront/images/banner/' . $banner->image) }}" id="bannerImageShow"
                    alt="" calss="m-auto" height="100px">
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
        </form>
    </div>
    @push('scripts')
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
