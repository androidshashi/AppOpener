@extends('layouts.master')
@section('title',"Home Page")
@section('content')

<div class="container">

    <div class="jumbotron" style="background-color: 	#dff4f7;">

        <form class="form-horizontal" action="{{url('/')}}" method="POST">
            @csrf
            <fieldset>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="long_url">Long URL</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <input id="long_url" name="long_url" type="url" placeholder="Enter link here" class="form-control input-md" value="{{$urlData->longUrl}}" required=true>

                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit" id="GenerateLink" name="GenerateLink" ">Short</button>
                            </span>
                        </div>
                        <span class=" text-danger">
                                    @error('long_url')
                                    {{ $message }}
                                    @endif
                            </span>
                        </div>
                    </div>


                    <!-- Appended Input-->
                    <div class=" form-group">
                        <label class="col-md-4 control-label" for="short_url">Short URL</label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <input id="short_url" disabled=true name="short_url" class="form-control" value="{{url('/').'/'.$urlData->shortCode}}" placeholder="{{url('/')}}/abc" type="text">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button" id="copyShortURL" name="copyShortURL" onClick="copyShortUrl()">Copy</button>
                                </span>

                            </div>
                            <span id="message" style="display:none" class="help-block">Copied short URL</span>
                        </div>
                    </div>
            </fieldset>
        </form>

    </div>

    <div class="row marketing">
        <div class="col-lg-6">
            <h4>Fast and secure</h4>
            <p>No spam or advertisement fast and secure</p>

            <h4>No login required</h4>
            <p>Login is not required to create short link anyone can create it easily </p>
        </div>

        <div class="col-lg-6">

            <h4>99.99% Up time</h4>
            <p>This site is up and running almost 24*7</p>

            <h4>100% Free to use</h4>
            <p>This service is 100% free to use.</p>
        </div>
    </div>

    <div class="row marketing">
        <div class="col-lg-6">
            <h4>Fast and secure</h4>
            <p>No spam or advertisement fast and secure</p>

            <h4>No login required</h4>
            <p>Login is not required to create short link anyone can create it easily </p>
        </div>

        <div class="col-lg-6">

            <h4>99.99% Up time</h4>
            <p>This site is up and running almost 24*7</p>

            <h4>100% Free to use</h4>
            <p>This service is 100% free to use.</p>
        </div>
    </div>

    <div class="row marketing">
        <div class="col-lg-6">
            <h4>Fast and secure</h4>
            <p>No spam or advertisement fast and secure</p>

            <h4>No login required</h4>
            <p>Login is not required to create short link anyone can create it easily </p>
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