@extends('layouts.app')
@section('content')
    {{-- @include('layouts.navigation') --}}
<main>
<div class="container">
   <div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card form-holder">
            <div class="card-body">
                <h1>Reset Password</h1>

                @if(Session::has('error'))
                   <p class="text-danger">{{ Session::get('error') }}</p>
                @endif

                @if(Session::has('success'))
                   <p class="text-success">{{ Session::get('success') }}</p>
                @endif
                
            <div class="ms-auto me-auto mt-5" style="width: 500px"></div>
                <p>We will send a link to your email, use that link to reset password.</p>

                <form action="{{ route('reset.password.post') }}" method="post">
                    @csrf 
                    <input type="text" name="token" hidden value="{{$token}}">
                    @method('post')
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" />
                        @if ($errors->has('email'))
                           <p class="text-danger">{{ $errors->first('email') }}</p>
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
                        <input type="text" name="password_confirmation" class="form-control" placeholder="Password Confirmation" />
                        {{-- @if ($errors->has('password'))
                           <p class="text-danger">{{ $errors->first('password') }}</p>
                        @endif --}}
                    </div> 

                    <div class="row">
                        {{-- <div class="col-8 text-left">
                            <a href="#" class="btn btn-link">Forget Password</a>
                        </div> --}}
                        
                        <div class="col-4 text-centre">
                            <br>
                            <input type="submit" class="btn btn-primary" value=" Submit " />
                        </div>
                    </div>
            </div>
        </div>
    </div>
   </div>
</div>
</main>
@endsection