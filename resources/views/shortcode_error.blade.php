@extends('layouts.master')
@section('title',"Short code error Page")
@section('content')
<link rel="stylesheet" href="{{asset('frontend/css/home.css')}}"></link>
<div class="container">
    <div class="jumbotron" >

        <center>
            <span class="text-danger"><strong>{{$urlData->errorMessage}}</strong></span><br><br>
            <a href="{{url('/')}}"><button class="btn-info">Create Your app Opener link</button></a><br><br>
            <a href="{{url('/')}}"><button class="btn-success">Create Short link</button></a>
        </center>


    </div>

    <h3>Why to use Short links & App Opener)?</h3>

    <div class="row marketing">
        <div class="col-lg-6">
            <h4>Boost subscribers on YouTube</h4>
            <p>Helps you to open YouTube links from your Instagram BIO in YouTube Apps</p>
            <h4>Get more video Views on YouTube</h4>
            <p>If you try to open normal YouTube links from Instagram BIO then it does not open in YouTube app.</p>
            <p>P-link.me urls open YouTube links in YouTube apps.</p>
        </div>

        <div class="col-lg-6">
            <h4>Boost followers on Instagram</h4>
            <p>Instagram links given in YouTube video's description does not open in Instagram app</p>
            <p>Convert your Instagram links in P-Link.me urls and when someone clicks on it. It will be opened directly in Instagram app.</p>
            <h4>Convert YouTube channel subscribers to your Instagram followers</h4>
            <p>Using our links your instagram profile will be directly opened in Instagram app not in web.</p>

        </div>
    </div>

    <div class="row marketing">
        <div class="col-lg-6">
            <h4>Fast and secure</h4>
            <p>No spam or advertisement fast and secure</p>

            <h4>No login required</h4>
            <p>Login is not required to create short link. Anyone can create it easily in one click.</p>
        </div>

        <div class="col-lg-6">

            <h4>99.99% Up time</h4>
            <p>This site is up and running almost 24*7</p>

            <h4>100% Free to use</h4>
            <p>This service is 100% free to use.</p>
        </div>
    </div>
</div>
@endsection