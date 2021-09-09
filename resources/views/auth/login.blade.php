@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5" style="box-shadow:-13px 13px 32px 2px rgba(0, 0, 0, 0.5);">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="text-center border border-light p-5">
                        @csrf

                        <p class="h4 mb-4">Log-in</p>

                        <!-- this input for email -->
                                <input id="email"
                                       type="email"
                                       class="form-control mb-4 @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ old('email') }}"
                                       placeholder="E-mail"
                                       required autocomplete="email"
                                       autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <!-- this input for password -->
                        <div class="">
                                <input  id="password"
                                        type="password"
                                        class="form-control mb-4 @error('password') is-invalid @enderror"
                                        name="password"
                                        placeholder="Password"
                                        required
                                        autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <!-- this input for Remember me and forgot password -->
                        <div class="d-flex justify-content-around">
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input  type="checkbox"
                                            class="custom-control-input"
                                            name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="custom-control-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <!-- this button for submit -->
                        <button type="submit" class="btn btn-primary btn-block my-4">
                                {{ __('Login') }}
                        </button>

                        <p>or sign in with:</p>

                        <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                        <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                        <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                        <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
