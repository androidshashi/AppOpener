@extends('layouts.master')
@section('title',"Short code error Page")
@section('content')
    <div class="container">
    <h1>{{$urlData->errorMessage}}</h1>
    </div>
@endsection