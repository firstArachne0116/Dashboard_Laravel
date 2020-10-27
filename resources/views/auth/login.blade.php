<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')
<body>
    <main class="container-fluid w-100" role="main">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
                <a class="u-login-form py-3 mb-auto" href="/">
                    <img class="img-fluid" src="/img/logo.png" width="160" alt="Stream Dashboard UI Kit">
                </a>

                <div class="u-login-form">
                    <form class="mb-3" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <h1 class="h2">Welcome Back!</h1>
                            <p class="small">Login with your social account.</p>
                        </div>

                        <div class="d-flex my-4">
                            <a class="btn btn-sm btn-dark px-3 mr-2" href="#">
                                <i class="fab fa-github mr-1"></i> Login with Github
                            </a>

                            <a class="btn btn-sm btn-danger px-3" href="#">
                                <i class="fab fa-google mr-1"></i> Login with Google
                            </a>
                        </div>

                        <p class="small">Or Login with your registered email address and password.</p>

                        <div class="form-group mb-4">
                            <label for="email">Your email</label>
                            <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" placeholder="" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-4">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" name="password" type="password" placeholder="" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" >
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group d-flex justify-content-between align-items-center mb-4">
                            <div class="custom-control custom-checkbox">
                                <input id="remember" class="custom-control-input" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember">Remember me</label>
                            </div>

                            @if (Route::has('password.request'))
                                    <a class="link-muted small" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                            @endif
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    </form>

                    <p class="small">
                        Don’t have an account? <a href="{{ url('/register') }}">Sign Up here</a>
                    </p>
                </div>

                <div class="u-login-form text-muted py-3 mt-auto">
                    <small><i class="far fa-question-circle mr-1"></i> If you are not able to sign in, please <a href="#">contact us</a>.</small>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-flex flex-column align-items-center justify-content-center bg-light">
                <img class="img-fluid position-relative u-z-index-3 mx-5" src="{{ asset('/svg/mockups/mockup.svg') }}" alt="Image description">

                <figure class="u-shape u-shape--top-right u-shape--position-5">
                    <img src="{{ asset('/svg/shapes/shape-1.svg') }}" alt="Image description">
                </figure>
                <figure class="u-shape u-shape--center-left u-shape--position-6">
                    <img src="{{ asset('/svg/shapes/shape-2.svg') }}" alt="Image description">
                </figure>
                <figure class="u-shape u-shape--center-right u-shape--position-7">
                    <img src="{{ asset('/svg/shapes/shape-3.svg') }}" alt="Image description">
                </figure>
                <figure class="u-shape u-shape--bottom-left u-shape--position-8">
                    <img src="{{ asset('/svg/shapes/shape-4.svg') }}" alt="Image description">
                </figure>
            </div>
        </div>
    </main>
</body>
</html>
