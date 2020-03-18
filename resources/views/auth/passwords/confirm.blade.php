@extends('auth.layouts.app')

@section('content')
    <section class="login-area">
        <div class="row m-0">
            <div class="col-lg-12 col-md-12 p-0">
                <div class="login-content">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="login-form">
                                <div class="logo">
                                    <a href="{{ route('/') }}"><img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }}"></a>
                                </div>

                                <h5>{{ __('Please confirm your password before continuing.') }}</h5>

                                <form method="POST" action="{{ route('password.confirm') }}">
                                    @csrf

                                    <div class="form-group">
                                        <input id="password" type="password" name="password" placeholder="{{ __('Your password') }}" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="default-btn"><i class="bx bx-mail-send"></i>
                                        {{ __('Confirm Password') }}
                                        <span></span>
                                    </button>

                                    @if (Route::has('password.request'))
                                    <div class="forgot-password">
                                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                    </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
