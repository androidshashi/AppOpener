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
    <style>
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-default">
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

    <footer class="bg-light text-center text-lg-start">

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #dff4f7;">
            © {{date('Y')}} Copyright:
            <a class="text-light" href="{{url('/')}}">{{url('/')}}</a>
        </div>
        <!-- Copyright -->


    </footer>
</body>

</html>