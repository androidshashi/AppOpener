@extends('layouts.master')
@section('title',"Contact us")
@section('content')
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"></link>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <div class="about-title clearfix">
                    <h3> <span>Contact Us</span></h3>
                    <h4>For any query, feel free to contact us.</h4>
                    <p class="about-paddingB">Email: {{$contactEmail}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection