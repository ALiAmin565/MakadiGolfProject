<!DOCTYPE html>
<html lang="en">

<head>
    <!-- #title -->
    <x-partials.meta-data />
    {{-- <title> {{ $title == '' ? 'Madinat Makadi Golf' : $title . ' | Madinat Makadi Golf' }}</title> --}}
    <x-partials.style />
</head>

<body>

    <x-partials.pre-loader />

    <!-- ==== authentication start ==== -->
    <section class="section section--space-bottom authentication authentication--alt wow fadeInUp text-center"
        data-wow-duration="0.4s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="authentication__wrapper">
                        <h4>Reset Password</h4>
                        @if (session('status'))
                            <div class="alert alert-success w-100" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @error('email')
                            <span class="alert alert-danger" role="alert" style="display:block;width:100% !important">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="input-single">
                                <label for="authEmailIn">Enter Your Email ID</label>
                                <input type="email" class="@error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required placeholder="Your email ID here">
                            </div>
                            <div class="section__cta">
                                <button type="submit" class="cmn-button">Send Password Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / authentication end ==== -->
    <x-partials.scripts />

    @stack('scripts')
</body>

</html>
