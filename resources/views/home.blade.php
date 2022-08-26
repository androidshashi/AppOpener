@extends('layouts.master')
@section('title',"Home Page")
@section('content')
<link rel="stylesheet" href="{{asset('frontend/css/home.css')}}"></link>
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="copyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Your short link is ready 😍</h5>
                </div>
                <div class="modal-body">
                    <span id="short_url" name="short_url" class="text-success">{{url('/').'/'.$urlData->shortCode}}</span>
                    <span id="message" name="message" style="display:none" class="text-info">Short URL copied successfully! 😊</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="copyShortUrl('{{url('/').'/'.$urlData->shortCode}}')" class="btn btn-primary">Copy</button>
                </div>
            </div>
        </div>
    </div>

    @if($urlData->shortCode!=null)
    <script>
        $('#copyModal').modal('show')
    </script>
    @endif

    <!-- Url shortener -->
    <div>
        <h4>Total links converted :<strong> {{$urlData->totalLinks}} </strong></h4>
    </div>
    <div class="jumbotron">
        <form class="form-horizontal" action="{{url('/')}}" method="POST">
            @csrf
            <fieldset>
                <!-- Text input-->
                <div class="form-group">

                    <label class="col-md-4 control-label" style="color:white" for="long_url">Long URL</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <input id="long_url" name="long_url" type="url" placeholder="Enter link here" class="form-control input-md" value="{{$urlData->longUrl}}" required=true>
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="submit" id="GenerateLink" name="GenerateLink" ">Short</button>
                            </span>
                        </div>
                        <span class=" text-danger">
                                    @error('long_url')
                                    {{ $message }}
                                    @endif
                            </span>

                        </div>
                    </div>
            </fieldset>
        </form>
    </div>


    <!-- App description -->
    <h2 style="color:green;">Why to use Short links & App Opener?</h2>

    <div class="row marketing">
        <div class="col-lg-6">
            <h3> <strong>Grow</strong> your YouTube channel</h3>
            <p>Helps you to open YouTube links from your Instagram BIO in YouTube Apps</p>
            <h3>Get more <strong>video views</strong> on YouTube</h3>
            <p>If you try to open normal YouTube links from Instagram BIO then it does not open in YouTube app.</p>
            <p>P-link.me urls open YouTube links in YouTube apps.</p>
        </div>

        <div class="col-lg-6">
            <h3>Boost followers on Instagram</h3>
            <p>Instagram links given in YouTube video's description does not open in Instagram app</p>
            <p>Convert your Instagram links in P-Link.me urls and when someone clicks on it. It will be opened directly in Instagram app.</p>
            <h3>Convert YouTube channel subscribers to your Instagram followers</h3>
            <p>Using our links your instagram profile will be directly opened in Instagram app not in web.</p>

        </div>
    </div>

    <h2 style="color:green;">How App opener works?</h2>
    <div class="row marketing">
        <div class="col-lg-6">
            <h3>Step 1: Convert your YouTube url into short url.</h3>
            <p>To convert your <strong>YouTube Url into short link</strong> just past the url in the long url input box.</p>
            <p>Click on <strong>short button</strong></p>
            <p>You will get a short url in the short url input box.</p>
            <p>Click on Copy button to <strong>copy your short url</strong></p>
            <h3>Step 2: Share your short URL any social media.</h3>
            <p>If anyone click on your short URL he/she will be redirected to your original YouTube URL.</p>
            <p>If anyone clicks on this link in mobile device this link will open in YouTube app not in any browser.</p>
        </div>

        <div class="col-lg-6">
            <h3>Step 1: Convert your Instagram url into short url.</h3>
            <p>To convert your <strong>Instagram Url into short link</strong> just past the url in the long url input box.</p>
            <p>Click on <strong>short button</strong></p>
            <p>You will get a short url in the short url input box.</p>
            <p>Click on Copy button to <strong>copy your short url</strong></p>
            <h3>Step 2: Share your short URL any social media(Eg: YouTube video descriptions).</h3>
            <p>If anyone click on your short URL he/she will be redirected to your original Instagram URL.</p>
            <p>If anyone clicks on this link in mobile device this link will open in Instagram app not in any browser.</p>
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