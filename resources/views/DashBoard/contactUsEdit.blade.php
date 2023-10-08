<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> Contact Us Edit </h1>
        @if (session()->has('success'))
            <div class="alert alert-primary text-center">{{ session()->get('success') }}</div>
        @endif
        <form class="forms-sample" action="{{ route('contact-us-dashboard.update', $contactUs->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- title --}}
            <x-dash-board.text-input title="Title" name="title" :value="$contactUs->title" />
            {{-- description --}}
            <x-dash-board.text-area title="Description" name="description" :value="$contactUs->description" />
            {{-- numbers --}}
            <x-dash-board.text-area title="All-numbers" name="numbers" :value="$contactUs->numbers" />
            {{-- emails --}}
            <x-dash-board.text-area title="All-emails" name="emails" :value="$contactUs->emails" />
            {{-- location --}}
            <x-dash-board.text-area title="Location" name="location" :value="$contactUs->location" />
            {{-- google_map_link --}}
            <x-dash-board.text-input title="Google-Map-Link" name="google_map_link" :value="$contactUs->google_map_link" />

            <button type="submit" id="submitButtonFacility" class="btn btn-gradient-primary me-2"
                style="position: relative;right: -90%">Submit</button>
        </form>
    </div>
</x-dash-board.layouts.app>
