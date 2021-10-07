@extends('layouts.master')
@section('title', 'Admin')
@section('content')

    <h2>Stacked form</h2>
    <form action="/edit" method="POST">
        @csrf
        <input type="hidden" name='id' value="{!! $data->id !!}">
        <div class="form-group">
            <label>First Name:</label>
            <input type="text" class="form-control" placeholder="Enter First Name" name="fName"
                value="{!! $data->first_name !!}">
        </div>
        <div class="form-group">
            <label>Last Name:</label>
            <input type="text" class="form-control" placeholder="Enter Last Name" name="lName"
                value="{!! $data->last_name !!}">
        </div>
        <div class="form-group">
            <label>Picture:</label>
            <input type="text" class="form-control" placeholder="Enter Picture Url" name="picture" value="{!! $data->picture !!}">
        </div>
        <div class="form-group">
            <label>Title:</label>
            <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{!! $data->title !!}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @endsection
