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
                        <h4>Reset Password Confirm</h4>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="input-single">
                                <label for="authEmailIn">Enter Your Email ID</label>
                                <input type="email" name="email" value="{{ $email ?? old('email') }}" required
                                    placeholder="Your email ID here">
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-single">
                                <label for="password">Enter Password</label>
                                <input type="password" name="password" id="password" required
                                    placeholder="Enter Your Password">
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-single">
                                <label for="password-confirm">Confirm Password</label>
                                <input id="password-confirm" type="password"  name="password_confirmation"
                                    placeholder="Enter Your Password">
                            </div>
                            <div class="section__cta text-start">
                                <button type="submit" class="cmn-button">Reset Password</button>
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
