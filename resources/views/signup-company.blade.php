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
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 p-5 person-bg ">
                <div id="space-between" class="container">
                    <div class="row align-items-start">
                        <h2 class="heading white-text">Sign up<br/> & hire the best talent</h2>
                    </div>
                    <div class="row align-items-end">
                        <div class="w-100">
                            <a href="/institute/create">
                                <p class="para white-text">Are you an Institute? <em> Sign up here.</em>
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
                <form style="padding: 2rem" class="grayBg" action="/company" method="post">
                    @csrf
                    <div class="form-group ">
                        <label for="name">Let's start with the name of the company</label>
                        <input type="text" class="form-control" name="name" required>
                        <span class="text-danger">{{ $errors->first("name")}}</span>
                    </div>
                    <div class="form-group ">
                        <label for="year">The year you got registered</label>
                        <input type="number" class="form-control" name="year" required>
                        <span class="text-danger">{{ $errors->first("year")}}</span>
                    </div>
                    <div class="form-group ">
                        <label for="domain">Domain of your company</label>
                        <input type="text" class="form-control" name="domain" >
                        <span class="text-danger">{{ $errors->first("domain")}}</span>
                    </div>
                    <div class="form-group ">
                        <label for="email">Email of your company</label>
                        <input type="email" class="form-control" name="email" >
                        <span class="text-danger">{{ $errors->first("email")}}</span>
                    </div>
                    <div class="form-group ">
                        <label for="password">Set password</label>
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
    </div>
</body>
</html>