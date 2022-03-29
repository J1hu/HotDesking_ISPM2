@extends('layouts.app')
<div class="bg-primary ">
@section('content')
<br><br><br><br><br>

<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                        <img src="logo.png" width="100" height="100" class="offset-md-5 mb-2">
                        </div>
                        <br>
                        <div class="row mb-3 ">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

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
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

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
                                <button type="submit" class="btn btn-warning mb-2">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div>
                            <div class="col-md-8 offset-md-4">
                                <p> Don't have an Account?<a class="btn btn-link" href="">Register</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br><br></div>
@endsection
