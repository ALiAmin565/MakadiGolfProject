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
        @if (session()->has('success'))
            <div class="alert alert-primary text-center">{{ session()->get('success') }}</div>
        @endif
        <form class="forms-sample" action={{ route('faq.update', $faq->id) }} method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- Question --}}
            <x-dash-board.text-input title="Question" name="question" :value="$faq->question" />
            {{-- Answer  --}}
            <x-dash-board.text-area title="Answer" name="answer" :value="$faq->answer" />
           
            {{-- Submit --}}
            <button type="submit" class="btn btn-gradient-primary m-2"
                style="position: relative;right: -90%;">Submit</button>
        </form>
    </div>
</x-dash-board.layouts.app>
