@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card form-holder">
                    <div class="card-body">
                        <h1>Register</h1>

                        @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                        @endif

                        {{-- @if (Session::has('success'))
                   <p class="text-success">{{ Session::get('success') }}</p>
                @endif --}}

                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="name" />
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>


                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" />
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>


                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone" />
                                @if ($errors->has('phone'))
                                    <p class="text-danger">{{ $errors->first('phone') }}</p>
                                @endif
                            </div>


                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" />
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="text" name="password_confirmation" class="form-control"
                                    placeholder="Password Confirmation" />
                                {{-- @if ($errors->has('password'))
                           <p class="text-danger">{{ $errors->first('password') }}</p>
                        @endif --}}
                            </div>


                            <!-- Accept Terms and Conditions Checkbox -->
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="accept_terms" id="accept_terms">
                                    <label class="form-check-label" for="accept_terms">
                                        {{ __('I accept the terms and conditions') }}
                                    </label>
                                    @error('accept_terms')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-8 text-left">
                                    <a href="#" class="btn btn-link">Forget Password</a>
                                </div>
                                <div class="col-4 text-right ">
                                    <input type="submit" class="btn btn-primary" id="registerBtn" value=" Register " />
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
