<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/main.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height"> --}}
            <div class="bgImg">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div  class="navbar" position="static">
                <div  class="justifyCenter container "  >
                        <div class=" toolbar title">
                                <a href="/">
                                    <img class="logo" src="/assets/logo.png" alt="hired." />
                                </a>
                        </div>
                        <div class="" >
                            <a href="/login">
                                <button class="link">Login</button>
                            </a>
                            <a href="/company/create"> 
                                <button class="inverted" >Sign Up</button>
                            </a>
                        </div>
                </div>
              </div>

              <div class="container-jumbo">

                <div  class="justifyCenter container">
                    <div > 
                        <h2 class="sub-heading whiteText">Let the best talent be hired</h2>
                        <h1 class="primary-font hero-heading">Find & post jobs!</h1>
                        
                        <div class="containerBtns mt-5">
                            <div>
                                <a href="/institute/create" >
                                <button class="inverted">Looking for a job</button>
                                </a>
                            </div>
                            <div > 
                                <a href="/company/create">
                                    <button >Want to hire?</button> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
                
    
                <div class="wrapper container">
                    <div class="row" >
                    <div class=" col col-md-4 offset-md-2">
                        <img class="img" src="/assets/work.svg" alt="Work" />
                    </div>
                    <div class="col col-md-6 whatWeDo">
                        <h2 class="heading">What we do</h2>
                        <div class="paper">
                            <h3 class="sub-heading">Connect people with the right jobs.</h3>
                            <p class="para">If you are an educational institution whose looking for better placement opportunities then you've come the right place.</p>
                            <a href="/company/create" class="link">Get started</a>
                        </div>
                        <div class="paper" >
                            <h3 class="sub-heading">Get you job postings & info out to the world.</h3>
                            <p class="para">If you are a company looking for the best and fresh talent, then look no further and try us today!</p>
                            <a href="/institute/create" class="link">Get started</a>
                        </div>
                    </div>
                </div>
                    
              </div>

              <div  class=" container wrapper roleBg" >
                  <div class="row">
                    <div class=" col-sm col-md-4 offset-md-3 ">
                        <h2 class="heading gray">
                            We Build Lasting Relationships <br /> Between Candidates & Businesses
                        </h2>
                        <div class=" mt-5 ">
                            <p class="para">
                            We believe in perfect matching between the candidates and companies. This is why we were inspired to build this solution so that we can streamline the process of hiring for companies and for institutions as well
                            </p>
                        </div>
                        <div class=" mt-5 ">
                            <button inverted>Let's Get Started</button>
                        </div>
                    </div>
                    <div class=" col-sm col-md-5">
                        <img class="img" src="/assets/blobs.png" alt="Blobs image"/>
                    </div>
                </div>
            </div>

            <div class="footer">
            
                <div class="container" >
                    <div class="row">
                        <div class=" col-sm col-md-2 offset-md-2 ">
                            <img src="/assets/blue-logo.png" alt = "hired."/>
                        </div>
                        <div class="col-sm col-md-3 offset-md-1">
                            <h3 class="sub-heading">Contact us</h3>
                            <div mt={2}></div>
                            <a href="mailto:info@hired.com">
                                <p class="para">info@hired.com</p>
                            </a>
                        </div>
                        <div class=" col-sm col-md-4 ">
                            <h5 class="sub-heading">Subscribe to our newsletter!</h5>
                            <div mt={2}></div>
                            <form class="form" autoComplete>
                                <input class="form-control" type="email" name="email" placeholder="Enter email id"/>
                                <button class="form-btn">Send </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <p>&copy; Copyrights Reserved. 2020 </p>
                </div>
            </div>
        </div>
    </body>
</html>
