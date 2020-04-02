@extends('layouts.form')

@section('form')
<div class="row">
    <div class="col-sm-12 col-md-6 p-5 person-bg ">
        <div id="space-between" class="container">
            <div class="row align-items-start">
                <h2 class="heading white-text">Sign up now & <br> make campus <br> recruitment <br> smoother.</h2>
            </div>
            <div class="row align-items-end">
                <div class="w-100">
                    <a href="/company/create">
                        <p class="para white-text">Are you an Company? <em> Sign up here.</em>
                        </p>
                    </a>
                </div>
                <a href="/login">
                    <p class="para white-text">Already a member? <em> Login here.</em>
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="col-sm p-0">
        <form style="padding: 2rem" class="grayBg" action="/institute" method="post">
            @csrf
            <div class="form-group ">
                <label for="name">Let's start with the name of the institute</label>
                <input type="text" class="form-control" name="name"  value={{ old('name')}} >
                <span class="text-danger">{{ $errors->first("name")}}</span>
            </div>
            <div class="form-group ">
                <label for="year">Affiliation Number</label>
                <input type="number" class="form-control" name="affl" value={{ old('affl')}}>
            </div>
            <div class="form-group ">
                <label for="email">Email of your company</label>
                <input type="email" class="form-control" name="email" value={{ old('email')}} >
                <span class="text-danger">{{ $errors->first("email")}}</span>
            </div>
            <div class="form-group ">
                <label for="year">Estb. in?</label>
                <input type="number" class="form-control" name="year" value={{ old('year')}} required>
                <span class="text-danger">{{ $errors->first("year")}}</span>
            </div>
            <div class="form-group ">
                <label for="password">Secure password</label>
                <input type="password" class="form-control" name="password" required>
                <span class="text-danger">{{ $errors->first("password")}}</span>
            </div>
            <div class="form-group ">
                <label for="cpassword">Confirm password</label>
                <input type="password" class="form-control" name="cpassword" required>
                <span class="text-danger">{{ $errors->first("cpassword")}}</span>
            </div>
            <div class="form-group mt-5">
                <button type="submit" class=" w-100">Sign up</button>
            </div>
            

        </form>
    </div>
</div>

@endsection
