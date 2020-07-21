@extends('layout')
@section('title', 'Home')
@section('content')
<p>&nbsp;</p>
<h5>Welcome to Docker Lemp</h5>
<div class="row">
    <div class="col-12">
        <p>This demo show you how to create a LEMP development environment using docker.</p>
        <div class="card">
            <div class="card-body">                
            <i>The <b>LEMP</b> software stack is a group of software that can be used to serve dynamic web pages and web applications written in PHP. This is an acronym that describes a Linux operating system, with an Nginx (pronounced like “Engine-X”) web server. The backend data is stored in the MySQL database and the dynamic processing is handled by PHP.</i>
            </div>
        </div>
        <p>&nbsp;</p>
    </div>
    <div class="col-12 text-center">
        <a href="/db" class="btn btn-primary main-button">Check database</a>
        <a href="/email" class="btn btn-primary main-button">Check email</a>
    </div>
</div>
@endsection
