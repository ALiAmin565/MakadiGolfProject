<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <h1 class="text-center"> Create Facility </h1>
        <form class="forms-sample" action={{ route('faq.store') }} method="post" enctype="multipart/form-data">
            @csrf
            {{-- Question --}}
            <x-dash-board.text-input title="Question" name="question" />
            {{-- Answer  --}}
            <x-dash-board.text-area title="Answer" name="answer" />
            {{-- Submit --}}
            <div class="text-center">
                <button type="submit" class="btn btn-gradient-primary m-2 ">Submit</button>
            </div>
        </form>
    </div>
</x-dash-board.layouts.app>
