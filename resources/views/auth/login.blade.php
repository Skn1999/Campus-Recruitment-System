{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/app.css">
    <title>Sign up Company</title>
</head>
<body>

    <div class="container justifyCenter">
            <div class="mt-3 mb-3 mx-auto">
             <a href="/"> <img src="/assets/blue-logo.png" alt="logo"/></a>
            </div>
        </div>
    </div>
    
    <div style="height: 70vh; margin: auto" class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 p-5 person-bg ">
                <div id="space-between" class="container">
                    <div class="row align-items-start">
                        <h2 class="heading white-text">Login<br/> & hire the best talent</h2>
                    </div>
                    <div class="row align-items-end">
                        <div class="w-100">
                            <a href="/company/create">
                                <p class="para white-text">Are you an Company? <em> Sign up here.</em>
                                </p>
                            </a>
                        </div>
                        <a href="/institute/create">
                            <p class="para white-text">Are you an Institute? <em> Sign up here.</em>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm p-0 grayBg">
                <div class="container">
                    <div class=" mt-5 mb-3 mx-0">
                        <h2 style="text-align: center; margin: auto 0; width:100%" class="sub-heading">Login</h2>
                    </div>
                </div>
                <form style="padding: 2rem; height: 500px" name="loginForm" action="/loginForm" method="post">
                    @csrf
                    <div class="form-group ">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-lg" name="email" value={{ old('email')}} >
                        <span class="text-danger">{{ $errors->first("email")}}</span>
                    </div>
                    
                    <div class="form-group ">
                        <label for="password">Set password</label>
                        <input type="password" class="form-control form-control-lg" name="password">
                        <span class="text-danger">{{ $errors->first("password")}}</span>
                    </div>
                    <div class="form-group">
                        <label for="type">Company/Institute</label>
                        <select name="type" class="custom-select custom-select-lg">
                            <option selected value="company">Company</option>
                            <option value="institute">Institute</option>
                        </select>
                    </div>

                    <div class="form-group mt-5">
                        <button type="submit" class=" w-100">Sign up</button>
                    </div>
                    

                </form>
            </div>
        </div>
    </div>
</body>
</html>
