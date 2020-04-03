@extends('layouts.form')

@section('name')
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
                    <input type="email" class="form-control form-control-lg" name="email">
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

            <a href="" class=""><small>Forgot password?</small></a>
        </div>
    </div>
</div>
@endsection
    