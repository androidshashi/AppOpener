<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>@yield('title')</title>
    <script src="{{asset('frontend/js/index.js')}}"></script>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{url('/')}}">P-Link.me</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item {{(request()->path()=='/')?'active':null}}"><a href="{{url('/')}}">Home</a></li>
                    <li class="nav-item {{(request()->path()=='about')?'active':null}}">
                        <a class="nav-link" href="{{url('/')}}/about">About</a>
                    </li>
                    <li class="nav-item {{(request()->path()=='contactus')?'active':null}}">
                        <a class="nav-link" href="{{url('/')}}/contactus">Contact</a>
                    </li>
                    <li class="nav-item {{(request()->path()=='privacy-policy')?'active':null}}">
                        <a class="nav-link" href="{{url('/')}}/privacy-policy">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- vertical space -->
    <div style="height: 50px;"></div>
    <footer class="bg-inverse text-center text-lg-start">

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #303030">

            <span><a class="text-light" style="color:white" href="{{url('/')}}">&nbsp;&nbsp; &nbsp;About Us</a></span>
            <span><a class="text-light" style="color:white" href="{{url('/')}}"> &nbsp;&nbsp;&nbsp;Contact Us</a></span>
            <span><a class="text-light" style="color:white" href="{{url('/')}}"> &nbsp;&nbsp;&nbsp;Privacy Policy</a></span>
            <span><a class="text-light" style="color:white" href="{{url('/')}}">&nbsp;&nbsp; &nbsp;Terms & Conditions&nbsp;&nbsp; &nbsp;</a></span>
            <span style="color:white">© {{date('Y')}} Copyright: </span>
            <a class="text-light" style="color:white" href="{{url('/')}}">{{url('/')}}</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>