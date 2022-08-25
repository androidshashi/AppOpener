@extends('layouts.master')
@section('title',"Short code Page")
@section('content')

<script>
    window.location = "{{$urlData->longUrl}}"
</script>
<script src="{{asset('frontend/js/shortcode.js')}}"></script>
<div class="container">

    <div class="jumbotron">
        <center>
            <img src="{{asset('frontend/img/logo.gif')}}" height="128" width="128" style="border: 1px dashed rgb(66, 133, 244);">
            <h1 class="display-3">{{url('/')}}</h1>
            <p><a class="btn btn-info btn-sm" href="{{url('/')}}" role="button" autocomplete="off">Create App Opener Link</a></p>
            <p class="lead"></p>
            <ul class="list-group">

                <li class="list-group-item">
                    &nbsp;Open <b>YouTube links</b> in YouTube Mobile app from <b>Instagram BIO</b></li>

                <li class="list-group-item">
                    <span class="badge"></span>
                    Open <b>Instagram links</b> from <b>YouTube</b> in Instagram mobile app
                </li>
                <li class="list-group-item">
                    &nbsp;Make long URL short</li>
            </ul>
            <p></p>
            <p>If not redirected automatically click here</p>
            <p><a class="btn btn-lg btn-success" href="{{$urlData->longUrl}}" role="button" onclick="clickLink" autocomplete="off" id="targetLink" style="display:block">Click Here</a></p>
        </center>
    </div>


</div>


@endsection