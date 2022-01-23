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
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Student Regsiter</h1>
                                    </div>
                                    <form method="POST" action="{{ route('student.create') }}" autocomplete="off">
                                        @if (Session::get('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif

                                        @if (Session::get('fail'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('fail') }}
                                            </div>
                                        @endif
                                        @csrf

                                        <div class="form-group">
                                            <label for="email">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter Student Name" value="{{ old('name') }}"> 
                                            <span class="text-danger">@error('name'){{$message}} @enderror </span>  
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter Email Address" value="{{ old('email') }}">  
                                            <span class="text-danger">@error('email'){{$message}} @enderror </span> 
                                        </div>
                                        <div class="form-group">
                                        <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{ old('password') }}">
                                            <span class="text-danger">@error('password'){{$message}} @enderror </span> 
                                    
                                        </div>
                                        <div class="form-group">
                                        <label for="cpassword">Confirm Password</label>
                                            <input type="password" class="form-control" name="cpassword" placeholder="Enter Confirm Password" value="{{ old('cpassword') }}">
                                            <span class="text-danger">@error('cpassword'){{$message}} @enderror </span> 
                                    
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-user btn-block">
                                                Regsiter
                                            </button>
                                        </div>
                                         
                                    <div class="text-center">
                                        <a class="small" href="{{route('password.request')}}">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{('register')}}">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
@endsection
