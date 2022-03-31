@extends('layouts.app')
@section('content')
<div class="container">
  <div class=" border-0 my-5">
    <div class="card-body p-5 ">
    <br><br><br><br>
    <div class="container" >
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card" style="background-color:#f4efeb;">
                <div  class="card-body" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <br>
                        <div>
                        <img src="logo.png" width="110" height="110" class="offset-md-5 mb-2">
                        </div>
                        <br>
                        <div class="row mb-3 ">
                            <div class="col-md-6 offset-md-3">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-3">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-5 ">
                                <button type="submit" class="btn btn-warning mb-2 text-white">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div>
                            <div class="col-md-8 offset-md-4">
                                <p> Don't have an Account?<a class="btn btn-link link-warning" href="">Register</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
</div>
    </div>
  </div>
  @endsection
<!-- style="background-color:#f4efeb;" -->
<!-- <img src="{{URL('images/background.jpg')}}"> -->