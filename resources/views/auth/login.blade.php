@extends('auth.layouts.app')

@section('content')
<div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"></div>
                            <div class="col-lg-6">
                                <div class="p-5">

                    <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>

                    <div class="card-body">
                        @isset($url)
                        <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                        @else
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @endisset
                            @csrf
                            <div class="form-group">
                                            <input id="email" type="email" class="form-control form-control-user
                                                @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required
                                                autocomplete="email" autofocus placeholder="Enter Email Address.">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }} </strong>
                                                        </span>
                                                    @enderror          
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control form-control-user
                                                @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password" placeholder="Password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }} </strong>
                                                        </span>
                                                    @enderror 
                                    
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" 
                                                name="remember" id="customCheck" {{ old('remember')? 
                                                'checked' : ''}}>

                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        
                                    <div class="text-center">
                                        <a class="small" href="{{route('password.request')}}">Forgot Password?</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

                            
    </div>
@endsection
