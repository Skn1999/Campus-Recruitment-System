@extends('layouts.dashboard')

@section('org-name')
    <h3> {{ $data['data']->name }} <h3>
@endsection

@section('control-btns')
<div>
    {{-- <a href="/company/{{ $data['data']->company_id }}/edit"> <button class="btn" >Edit Profile</button></a> --}}
    <a href="/login"> <button class="btn" >Log Out <img class="logOutBtn" src="/assets/back-arrow.svg" alt=""> </button></a>
</div>
@endsection


@section('content')
    <div class="row">
        <div class="main col-md-8 col-sm-12" >
            <img src="/assets/blue-logo.png" alt="hired."/>
            <div class='contentBlock' >
                <h4 class="sub-heading">DashBoard</h4>
                <div class="banner">
                    <div>
                        <h2 class="alertTitle">Welcome back!</h2>
                        <p class="subtitle">Let's get you started</p>
                        <p class="links">Need help ?</p>
                    </div>
                    <div>
                        <img src="/assets/work-.svg" alt=""/>
                    </div>
                </div>
            </div>
        
            {{-- Pending Jobs --}}
            <div class='contentBlock' >
                <h4 class="sub-heading">Pending</h4>
                <div class="owl-carousel owl-theme">
                    @foreach ( $data['jobs'] as $job)
                        <div class="item">
                            <div class="jobCard" >
                                <h2 class="jobtitle"> {{ $job['job_position']}} </h2>
                                <p>
                                    <span class="parameter">Posted by : </span>
                                    <span class="paramValue">{{ $data['data']->name }}</span>
                                </p>
                                <p>
                                    <span class="parameter">Salary : </span>
                                    <span class="paramValue">10 LPA</span>
                                </p>
                                <a href="/job/{{$job['job_id']}}" class="linkBtn">
                                    <span class="btn">
                                        VIEW MORE
                                    </span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        
            {{-- Completed Jobs --}}
            {{-- <div class='contentBlock' >
                <h4 class="sub-heading">Completed</h4>
                <div class="owl-carousel owl-theme">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="item">
                            <div class="jobCard" >
                                <h2 class="jobtitle"> UI/UX Designer Intern  </h2>
                                <p>
                                    <span class="parameter">Posted by : </span>
                                    <span class="paramValue">Samsung Inc.</span>
                                </p>
                                <p>
                                    <span class="parameter">Salary : </span>
                                    <span class="paramValue">10 LPA</span>
                                </p>
                                <a href="/test" class="linkBtn">
                                    <span class="btn">
                                        view results
                                    </span>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div> --}}
        </div>
        <div class="postJobForm  col-md-4 col-sm-12">
            <p class="links">Post Job</p>
            <form action="/job/{{$data['data']->company_id}}" method="POST" class="postJob" >
                @csrf
                <div class="form-group">
                    <label for="" class="bmd-label-floating">Job Position</label>
                    <input class="form-control" id="jobPosition" name="jobPosition" label="" type="text" variant="outlined" >
                    <span class="text-danger">{{ $errors->first("jobPosition")}}</span>
                </div>
                <div class="form-group">
                    <label for="" class="bmd-label-floating">Skills Required ( Comma separated )</label>
                    <input class="form-control" id="skills" name="skills" label="" type="text" variant="outlined" >
                    <span class="text-danger">{{ $errors->first("skills")}}</span>
                </div>
                <div class="form-group">
                    <label for="" class="bmd-label-floating">Eligibility criteria</label>
                    <input class="form-control" id="eligibility" name="eligibility" label="" type="text" variant="outlined" >
                    <span class="text-danger">{{ $errors->first("eligibility")}}</span>
                </div>
                <div class="form-group">
                    <label for="" class="bmd-label-floating">Number of Vacancies</label>
                    <input class="form-control" id="vacancy" name="vacancy" label="" type="number" variant="outlined" >
                    <span class="text-danger">{{ $errors->first("vacancy")}}</span>
                </div>
                <div class="form-group">
                    <label for="" class="bmd-label-floating">Location of the Job</label>
                    <input class="form-control" id="location" name="location" label="" type="text" variant="outlined" >
                    
                </div>

                    {{-- <label for="" class="bmd-label-floating"></label>
                    <input class="form-control" id="file" name="file" label="" type="file" variant="outlined" > --}}
                
                <button type="submit" variant="contained" class="btn btnRoot" >Post job</button>
            </form>
        </div>
    </div>

@endsection

@section('script')
    $(".owl-carousel").owlCarousel({
        {{-- loop:true, --}}
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
@endsection