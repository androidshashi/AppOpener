@extends('layouts.master')
@section('title',"About Page")
@section('content')
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"></link>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <div class="about-title clearfix">
                    <h1>About <span>{{$siteName}}</span></h1>
                    <h3>Short link that opens app in their respective android apps</h3>

                    <h2 class="about-paddingB">P-Link.me helps YouTuber to grow their YouTube channel</h2>

                    <p><b>Problem: </b>We put our YouTube video or channel link in Instagram profile. When someone click on that link. It opens your YouTube channel or video in browser not in YouTube app.</p>
                    <p>The problem with this is he/she can only view it because it is in browser. He/she can not like, comment, or subscribe. He has to login for this. Thus most of the people ignore it and close it. And your lost many subscriber like this. </p>
                    <p><b>Solution: </b>Convert your YouTube links with our site and put it in your Instagram BIO.</p>
                    <p>If anyone clicks on that link on your Instagram profile, YouTube app will be opened with your YouTube channel or video.</p> Now user is already logged in the YouTube app. He/she can like, comment or subscribe.

                    <h2 class="about-paddingB">P-Link.me helps Instagram users to grow on Instagram</h2>

                    <p><b>Problem: </b>We put our Instagram profile link in YouTube video description. When someone click on that link. It opens your Instagram profile in browser not in instagram app.</p>
                    <p>The problem with this is he/she can only view it because it is in browser. He/she can not like, comment, or follow. He has to login for this. Thus most of the people ignore it and close. And your lost many followers like this. </p>
                    <p><b>Solution: </b>Convert your Instagram profile link with our site and put it in your YouTube description.</p>
                    <p>If anyone clicks on this link from videos description, Instagram app will be opened with your Instagram profile.</p> Now user is already logged in the Instagram app. He/she can like, comment or follow.
                    <div class="about-icons">
                        <ul>
                            <li><a href="#"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a> </li>
                            <li><a href="#"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a> </li>
                            <li> <a href="#"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a> </li>
                            <li> <a href="mailto:"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection