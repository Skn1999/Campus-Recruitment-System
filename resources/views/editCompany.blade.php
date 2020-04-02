@extends('layouts.form')

@section('form')

@include('inc.message')
<div class="row mt-5">
    <div class="col-sm-12 col-md-6 p-5">
        <div id="space-between" class="container">
            <div class="row align-items-start">
                <h2 class="heading">Change your<br/>profile settings here.</h2>
            </div>
        </div>
    </div>
    <div class="col-sm p-0">
        <form style="padding: 2rem" class="grayBg" action="/company/{{ $data->company_id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group ">
                <label for="name">The name of the company</label>
                <input type="text" class="form-control" name="name"  value={{ $data->name }}>
                <span class="text-danger">{{ $errors->first("name")}}</span>
            </div>
            <div class="form-group ">
                <label for="year">The year you got registered</label>
                <input type="number" class="form-control" name="year" value={{ $data->year }} >
                <span class="text-danger">{{ $errors->first("year")}}</span>
            </div>
            <div class="form-group ">
                <label for="domain">Domain of your company</label>
                <input type="text" class="form-control" name="domain" value={{ $data->domain}} >
                <span class="text-danger">{{ $errors->first("domain")}}</span>
            </div>
            <div class="form-group ">
                <label for="email">Email of your company</label>
                <input type="email" class="form-control" name="email" value={{ $data->email }} >
                <span class="text-danger">{{ $errors->first("email")}}</span>
            </div>
            <div class="form-group mt-5">
                <button type="submit" class=" w-100">Update Information</button>
            </div>
            

        </form>
    </div>
</div>
@endsection
        
