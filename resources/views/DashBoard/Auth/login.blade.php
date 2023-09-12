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
                        <h4>Login to Makadi Golf DashBoard</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-single">
                                <label for="authEmailIn">Enter Your Email ID</label>
                                <input type="email" name="email" id="authEmailIn" required
                                    placeholder="Your email ID here">
                            </div>
                            @error('email')
                                <span class="alert alert-danger d-block w-100" role="alert" >
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-single">
                                <label for="authPassword">Enter Password</label>
                                <input type="password" name="password" id="authPassword" required
                                    placeholder="Enter Your Password">
                            </div>
                            @error('password')
                                <span class="alert alert-danger d-block w-100" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <p class="forget secondary-text">
                                {{-- <a href="contact-us.html">Forgot Password?</a> --}}
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </p>
                            <div class="section__cta text-start">
                                <button type="submit" class="cmn-button">Sign In</button>
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
