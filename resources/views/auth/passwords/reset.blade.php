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
                    <form class="mb-3" method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="mb-3">
                            <h1 class="h2">{{ __('Reset Password') }}</h1>
                            <p class="small">Please choose a new password.</p>
                        </div>
                        <div class="form-group mb-4">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" value="{{ $email ?? old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" class="form-control" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" class="form-control" name="password_confirmation" type="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">{{ __('Reset Password') }}</button>
                    </form>

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
