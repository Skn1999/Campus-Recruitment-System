@extends('layout.app')
@section('content')
    <div class="row">
        <div class="main col-sm-8" >
            <img src="/assets/blue-logo.png" alt="hired."/>
            <div class='contentBlock' >
                <h4 class="title">DashBoard</h4>
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
                <h4 class="title">Pending</h4>
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
                                <p class="linkBtn">
                                    <span class="btn">
                                        VIEW MORE
                                    </span>
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        
            {{-- Completed Jobs --}}
            <div class='contentBlock' >
                <h4 class="title">Completed</h4>
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
                                <p class="linkBtn">
                                    <span class="btn">
                                        VIEW results
                                    </span>
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="postJobForm  col-sm-4">
            <p class="links">Post Job</p>
            <form action="" class="postJob" >
                <div class="form-group">
                    <label for="" class="bmd-label-floating">Job Position</label>
                    <input class="form-control" id="jobPosition" name="jobPosition" label="" type="text" variant="outlined" >
                </div>
                <div class="form-group">
                    <label for="" class="bmd-label-floating">Skills Required ( Comma separated )</label>
                    <input class="form-control" id="skills" name="skills" label="" type="text" variant="outlined" >
                </div>
                <div class="form-group">
                    <label for="" class="bmd-label-floating">Eligibility criteria</label>
                    <input class="form-control" id="eligibility" name="eligibility" label="" type="text" variant="outlined" >
                </div>
                <div class="form-group">
                    <label for="" class="bmd-label-floating">Number of Vacancies</label>
                    <input class="form-control" id="vacancy" name="vacancy" label="" type="number" variant="outlined" >
                </div>
                <div class="form-group">
                    <label for="" class="bmd-label-floating">Location of the Job</label>
                    <input class="form-control" id="location" name="location" label="" type="text" variant="outlined" >
                </div>
                <div class="form-group">
                    <label for="" class="bmd-label-floating"></label>
                    <input class="form-control" id="file" name="file" label="" type="file" variant="outlined" >
                </div>
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