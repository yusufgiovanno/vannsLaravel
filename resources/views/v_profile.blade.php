@extends('layouts.master')
@section('title', 'Admin')
@section('content')

    <h1>
        <center>{!! session('title') !!}</center>
    </h1>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <center>
                <img src="{!! session('foto') !!}" class="rounded-circle img-fluid" alt="Profile Picture" style="max-width:250px; margin-bottom:10px">
                <h5>{!! session('nama') !!}</h5>

                <ul class="list-inline">
                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank"
                            href="#">200<br>Missions</a></li>
                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank"
                            href="#">180<br>Accomplished</a></li>
                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank"
                            href="#">20<br>Unfinished</a></li>
                </ul>
            </center>
        </div>
        <div class="col-md-3"></div>
    </div>

@endsection
