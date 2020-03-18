@extends('auth.layouts.app')

@section('content')
<section class="signup-area">
    <div class="row m-0">
        <div class="col-lg-6 col-md-12 p-0">
            <div class="signup-image">
                <img src="{{ asset('img/login-bg.jpg') }}" alt="{{ config('app.name') }}">
            </div>
        </div>

        <div class="col-lg-6 col-md-12 mt-4 p-0">
            <div class="signup-content">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="signup-form">
                            <a href="#" class="return-btn ripple" data-ripple-color="#bababa">
                                <i class="bx bx-chevron-left" style="line-height: unset"></i>
                            </a>

                            <div class="logo">
                                <a href="{{ route('/') }}"><img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }}"></a>
                            </div>

                            <h3>Create your {{ config('app.name') }} account now</h3>
                            @if(Route::has('login'))
                            <p>{{ __('Have an account?') }} <a href="{{ route('login') }}">{{ __('Log in') }}</a></p>
                            @endif

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="text" name="name" id="name" placeholder="{{ __('Your Full Name') }}" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="{{ __('Your E-mail Address') }}" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" id="password" placeholder="{{ __('Create a password') }}" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm password') }}" required autocomplete="new-password">
                                </div>

                                <button type="submit" class="default-btn">
                                    <i class="bx bx-log-in"></i>
                                        {{ __('Sign Up') }}
                                    <span></span>
                                </button>

                                <div class="connect-with-social">
                                    <span>Or</span>
                                    <button type="button" class="facebook"><i class="bx bxl-facebook"></i> Continue with Facebook</button>
                                    <button type="button" class="google"><i class="bx bxl-google"></i> Continue with Google</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
