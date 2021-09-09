@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5" style="box-shadow:-13px 13px 32px 2px rgba(0, 0, 0, 0.5);">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="text-center border border-light p-5">
                        @csrf

                        <p class="h4 mb-4">Register</p>
                    
                        <!-- enter your name -->
                                <input  id="name" 
                                        type="text" 
                                        class="form-control mb-4 @error('name') is-invalid @enderror" 
                                        name="name" 
                                        value="{{ old('name') }}"  
                                        placeholder="Name"
                                        autocomplete="name" 
                                        autofocus>
                        <!-- Error for input-Name -->
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <!------------------------------->

                        <!-- Enter your E-mail -->
                                <input  id="email" 
                                        type="email" 
                                        class="form-control mb-4 @error('email') is-invalid @enderror" 
                                        name="email" 
                                        value="{{ old('email') }}"  
                                        placeholder="E-mail"
                                        autocomplete="email">
                        <!-- Error for input-Email -->
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <!------------------------------>

                        <!-- Enter your User-Name -->
                                <input  id="username" 
                                        type="username" 
                                        class="form-control mb-4 @error('username') is-invalid @enderror" 
                                        name="username" 
                                        value="{{ old('username') }}"  
                                        placeholder="User-Name"
                                        autocomplete="username">
                        <!-- Error for input-UserName -->
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        <!------------------------------>

                        <!-- Enter your User-Name -->
                                <input  id="password" 
                                        type="password" 
                                        class="form-control mb-4 @error('password') is-invalid @enderror" 
                                        name="password" 
                                        placeholder="Password"
                                        autocomplete="new-password">
                        <!-- Error for input-UserName -->
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        <!------------------------------>

                        <!-- Enter your User-Name -->
                                <input  id="password-confirm" 
                                        type="password" 
                                        class="form-control mb-4" 
                                        name="password_confirmation" 
                                        placeholder="Confirm-Password"
                                        autocomplete="new-password">
                        <!------------------------------>

                                <button type="submit" class="btn btn-primary btn-block my-4">
                                    {{ __('Register') }}
                                </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
