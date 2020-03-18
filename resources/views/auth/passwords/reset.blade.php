@extends('auth.layouts.app')

@section('content')
    <section class="login-area">
        <div class="row m-0">
            <div class="col-lg-12 col-md-12 p-0">
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

                                <h4>{{ __('Reset Password') }}</h4>

                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group">
                                        <input id="email" type="email" name="email" placeholder="{{ __('Your E-mail Address') }}" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input id="password" type="password" name="password" placeholder="{{ __('Your password') }}" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm password') }}" required autocomplete="new-password">
                                    </div>

                                    <button type="submit" class="default-btn"><i class="bx bxs-edit-alt"></i>
                                        {{ __('Reset Password') }}
                                        <span></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
