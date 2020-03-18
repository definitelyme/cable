@extends('auth.layouts.app')

@section('content')
    <section class="login-area">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="login-image">
                    <img src="{{ asset('img/login-bg.jpg') }}" alt="{{ config('app.name') }}">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-0">
                <div class="login-content">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="login-form">
                                <a href="#" class="return-btn ripple" data-ripple-color="#bababa">
                                    <i class="bx bx-chevron-left" style="line-height: unset"></i>
                                </a>

                                <div class="logo">
                                    <a href="{{ route('/') }}"><img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }}"></a>
                                </div>

                                <h3>Welcome back</h3>
                                @if (Route::has('register'))
                                <p>Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <input type="email" name="email" id="email" placeholder="{{ __('Your E-mail Address') }}" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" id="password" placeholder="{{ __('Your Password') }}" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="default-btn"><i class="bx bxs-lock-open"></i>Login<span></span></button>

                                    @if (Route::has('password.request'))
                                    <div class="forgot-password">
                                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                    </div>
                                    @endif

                                    <div class="connect-with-social">
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
