<x-dash-board.layouts.app>
    <style>
        .section-icon {
            border: 1px solid black;
            padding: 5%;
            border-radius: 30px;
        }
    </style>
    <div class="content-wrapper">
        <h1 class="text-center"> About Us Edit Icons </h1>
        @foreach (['title', 'second_title', 'third_title', 'description', 'second_description', 'third_description', 'icon', 'second_icon', 'third_icon'] as $field)
            @error($field)
                <div class="alert alert-danger text-center">{{ $message }}</div>
            @enderror
        @endforeach
        @php
            $iconValues = ['golftio-file', 'golftio-cart', 'golftio-flag', 'golftio-pin-location', 'golftio-phone', 'golftio-user-shield', 'golftio-shot-done', 'golftio-user', 'golftio-radio', 'golftio-minus', 'golftio-close', 'golftio-check', 'golftio-long-right-arrow', 'golftio-trophy', 'golftio-shot-down', 'golftio-email', 'golftio-plus', 'golftio-hands', 'golftio-magnifying', 'golftio-quote', 'golftio-location', 'golftio-users', 'golftio-shot-upper', 'golftio-printer', 'golftio-star', 'golftio-pin-checked', 'golftio-shot-ground', 'golftio-download', 'golftio-paper-plane', 'golftio-gym', 'golftio-shot-great-upper', 'golftio-sticks', 'golftio-flag', 'golftio-ball'];
            // Assuming $selectedValue contains the value from the database
            // $selectedValue = $facility->icon; // Replace with the actual value from the database
            
            $selectedValueOne = $aboutUsIcons->icon;
            $selectedValueTwo = $aboutUsIcons->second_icon;
            $selectedValueThree = $aboutUsIcons->third_icon;
        @endphp
        @if (session()->has('success'))
            <div class="alert alert-primary text-center">{{ session()->get('success') }}</div>
        @endif
        <form class="forms-sample" action="{{ route('updateEditIconPage') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="section-icon">
                <h1 class="text-center">First</h1>
                {{-- title --}}
                <x-dash-board.text-input title="AboutUsTitle" name="title" :value="$aboutUsIcons->title" />
                {{-- Description --}}
                <x-dash-board.text-area title="AboutUsDescription" name="description" :value="$aboutUsIcons->description" />
                {{-- Icons --}}
                <x-dash-board.select-icon-drop-down name="icon" label="Icons">
                    @foreach ($iconValues as $iconValue)
                        <option value="{{ $iconValue }}" @if ($selectedValueOne === $iconValue) selected @endif>
                            {{ $iconValue }}</option>
                    @endforeach
                </x-dash-board.select-icon-drop-down>
            </div>
            <br>
            <div class="section-icon">
                <h1 class="text-center">Second</h1>
                {{-- second title --}}
                <x-dash-board.text-input title="AboutUsSecondTitle" name="second_title" :value="$aboutUsIcons->second_title" />
                {{-- second description --}}
                <x-dash-board.text-area title="AboutUsSecondDescription" name="second_description" :value="$aboutUsIcons->second_description" />
                {{-- second Icons --}}
                <x-dash-board.select-icon-drop-down name="second_icon" label="Second-Icons">
                    @foreach ($iconValues as $iconValue)
                        <option value="{{ $iconValue }}" @if ($selectedValueTwo === $iconValue) selected @endif>
                            {{ $iconValue }}</option>
                    @endforeach
                </x-dash-board.select-icon-drop-down>
            </div>
            <br>
            <div class="section-icon">
                <h1 class="text-center">Third</h1>
                {{-- third title --}}
                <x-dash-board.text-input title="AboutUsThird-Title" name="third_title" :value="$aboutUsIcons->third_title" />
                {{-- third description --}}
                <x-dash-board.text-area title="AboutUsThirdDescription" name="third_description" :value="$aboutUsIcons->third_description" />
                {{-- third Icons --}}
                <x-dash-board.select-icon-drop-down name="third_icon" label="Third-Icons">
                    @foreach ($iconValues as $iconValue)
                        <option value="{{ $iconValue }}" @if ($selectedValueThree === $iconValue) selected @endif>
                            {{ $iconValue }}</option>
                    @endforeach
                </x-dash-board.select-icon-drop-down>
            </div>
            <br>
            <button type="submit" id="submitButtonFacility" class="btn btn-gradient-primary me-2"
                style="position: relative;right: -90%">Submit</button>
        </form>
    </div>

    @push('scripts')
    @endpush
</x-dash-board.layouts.app>
