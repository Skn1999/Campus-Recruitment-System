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
        <div class="main col-sm-12 col-md-8" >
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
        
            {{-- Recent Jobs --}}
            <div class='contentBlock' >
                <h4 class="sub-heading">Recently Added</h4>
                <div class="owl-carousel owl-theme">
                    @foreach ( $data['jobs'] as $job)
                        <div class="item">
                            <div class="jobCard" >
                                <h2 class="jobtitle"> {{ $job['job_position']}} </h2>
                                {{-- <p>
                                    <span class="parameter">Posted by : </span>
                                    <span class="paramValue"></span>
                                </p> --}}
                                <p>
                                    <span class="parameter">Salary : </span>
                                    <span class="paramValue">8 LPA</span>
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
        
            {{-- Appeared Jobs --}}
            {{-- <div class='contentBlock' >
                <h4 class="sub-heading">Appeared</h4>
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
            </div> --}}
        </div>
        <div class="postJobForm col-sm-12 col-md-4">
            <h2 class="heading2">Results so far</h2>
            <div class="mt-5">
                
                <canvas id="myChart"></canvas>
            </div>
            <div class="mt-5">
                <canvas id="myChart2"></canvas>
            </div>
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

    var ctx = document.getElementById('myChart').getContext('2d');
    var ctx2 = document.getElementById('myChart2').getContext('2d');

    Chart.defaults.global.defaultFontFamily = "Roboto";
    Chart.defaults.global.defaultFontSize = 14;
    Chart.defaults.global.defaultFontColor = '#777';

    var myChart = new Chart(ctx, {
        type: 'pie',
        data : {
            labels : ['80%-95%', '70%-80%', '60%-70%', '50%-60%', '40%-50%', 'Less than 40%'],
            datasets  : [{
                label : "Percentage wise performance of Students",
                backgroundColor : [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)'
                ],
                data : [ 90, 75, 60, 55, 35, 20 ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options :{
            title: {
                display: true,
                text: "Job Test wise performance of Students",
                fontSize: 20
            },
            legend: {
                position: "right", 
                labels: {
                    fontColor : '#000'
                }
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    bottom: 0,
                    top: 0,
                }
            }
        }
    });

    var myChart = new Chart(ctx2, {
        type: 'line',
        data : {
            labels : ['Test1', 'Test2', 'Test3', 'Test4', 'Test5', 'Test6'],
            datasets  : [{
                label : "",
                backgroundColor : [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)'
                ],
                data : [ 90, 75, 60, 55, 35, 20 ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options :{
            title: {
                display: true,
                text: "Percentage wise performance of Students",
                fontSize: 20
            },
            legend: {
                position: "right", 
                labels: {
                    fontColor : '#000'
                }
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    bottom: 0,
                    top: 0,
                }
            }
        }
    });
@endsection