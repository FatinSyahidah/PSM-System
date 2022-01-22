@extends('auth.layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>

                    <div class="card-body">
                        @isset($url)
                        <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                        @else
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @endisset
                            @csrf

                            @if (Session::get('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif
                            <div class="form-group row">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name"> 
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                     </span>
                                                @enderror
                                        </div>

                                        <div class="form-group row">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"> 
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                     </span>
                                                @enderror
                                            
                                        </div>

                                        <div class="form-group row">
                                        
                                            <input id="password" type="password" class="form-control form-control-user
                                                @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password" placeholder="Password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }} </strong>
                                                        </span>
                                                    @enderror 
                                    
                                        </div>
                                        <div class="form-group row">
                    
                                                <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                        </div>
                                     
                                        <button class="btn btn-primary btn-user btn-block">
                                           Register
                                        </button>
                                        
                                    <div class="text-center">
                                        <a class="small" href="{{route('login')}}">Login Here</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

@endsection
