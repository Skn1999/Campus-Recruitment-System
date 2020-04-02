@extends('layouts.dashboard')

@section('control-btns')
<div>
    {{-- <a href="/company/{{ $data['data']->company_id }}/edit"> <button class="btn" >Edit Profile</button></a> --}}
    <a href="/login"> <button class="btn" >Log Out <img class="logOutBtn" src="/assets/back-arrow.svg" alt=""> </button></a>
</div>
@endsection

@section('content')
    
    <div class="container">
        
        <h1 class="mt-3">Job Info</h1>
        <div class="row paper w-100 py-5 px-5">

            <div class="col-12">
                <p class="sub-heading">Posted By:</p>
                <h1 class="heading2">{{ $data['company']->name }} </h1>
                <hr />
            </div>
            
            <div class="col-12 mt-3 pt-3">
                <p class="sub-heading">Job Information:</p>
                <div class="row mt-3 align-items-center">
                    <div class="col">
                        <p class="sub-title">Job Title</p>
                        <h1 class="heading2">{{ $data['job']->job_position }} </h1>
                    </div>
                    <div class="col">
                        <p class="sub-title">Eligibility</p>
                        <p class="para"> {{$data['job']->eligibility}} </p>
                    </div>
                    <div class="col">
                        <p class="sub-title">Number of vacancies</p>
                        <p class="para"> {{$data['job']->no_of_vacancies}} </p>
                    </div>
                    <div class="col">
                        <p class="sub-title">Location</p>
                        <p class="para"> {{$data['job']->location}} </p>
                    </div>
                </div>
                <hr />
            </div>
        
            <div class="col-12 mt-3 pt-3">
                <p class="sub-heading">Company Info</p>
                <div class="row mt-3">
                    <div class="col">
                        <p class="sub-title">Company Domain</p>
                        <h1 class="para">{{ $data['company']->domain }} </h1>
                    </div>
                    <div class="col">
                        <p class="sub-title">Registered In</p>
                        <p class="para"> {{$data['company']->year}} </p>
                    </div>
                    <div class="col">
                        <p class="sub-title">Email</p>
                        <a href="mailto:{{ $data['company']->email}}" class="btn btn-link m-0 p-0"> {{$data['company']->email}} </a>
                        <div class="alert alert-info mt-3">
                            <small>Click on the email to send the mail to the company.</small>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    
@endsection