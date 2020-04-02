<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRS</title>
    <link rel="stylesheet" href="/css/app.css">
    {{-- Carousel CSS --}}
    <link rel="stylesheet" href="/css/carousel/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="/css/carousel/dist/assets/owl.theme.default.min.css">

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/company.css">
    
</head>
<body>

    {{-- side drawer --}}
    <div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay">
        <div id="dw-s2" class="bmd-layout-drawer bg-faded sideDrawer ">
          <div>
            <img src="/assets/blue-logo.png" alt="hired.">
            <p class="orgName">@yield('org-name')</p>
          </div>
          @yield('control-btns')
        </div>
        <main class="bmd-layout-content">
            <button class="navbar-toggler navToggler" type="button" data-toggle="drawer" data-target="#dw-s2">
                <span class="sr-only">Toggle drawer</span>
                <i class="material-icons">menu</i>
            </button>
          <div class="container-fluid mainContent">
            @include('inc.message')
            @yield('content')
          </div>
        </main>
    </div>
    
    

    
    {{-- Bootstrap JS --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    {{-- Carousel JS --}}
    {{-- <script src="/jquery-3.4.1.js"></script> --}}
    <script src="/css/carousel/dist/owl.carousel.js"></script>
    <script>
        @yield('script')
    </script>
</body>
</html>