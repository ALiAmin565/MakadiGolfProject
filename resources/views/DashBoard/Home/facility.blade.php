<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> Facility Section Setting </h1>
        <form class="forms-sample" action={{ route('home-page-facility.update', $facilityPage->id) }} method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @foreach (['title', 'sub_title', 'description'] as $field)
                @error($field)
                    <div class="alert alert-danger text-center">{{ $message }}</div>
                @enderror
            @endforeach
            @if (session()->has('success'))
                <div class="alert alert-primary text-center">{{ session()->get('success') }}</div>
            @endif
            <x-dash-board.text-input title="FacilityTitle" name="title" :value="$facilityPage->title" :required="true" />
            <x-dash-board.text-input title="FacilitySubtitle" name="sub_title" :value="$facilityPage->sub_title" :required="true" />
            <x-dash-board.text-area title="FacilityDescription" name="description" :value="$facilityPage->description" />
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
        </form>
    </div>
</x-dash-board.layouts.app>
