@extends('layouts.master')
@section('title', 'Admin')
@section('content')

    <h2><center>Justice League Registration</center></h2>
    <form action="insert" method="POST">
        @csrf
        <div class="form-group">
            <label>First Name:</label>
            <input type="text" class="form-control" placeholder="Enter First Name" name="fName">
        </div>
        <div class="form-group">
            <label>Last Name:</label>
            <input type="text" class="form-control" placeholder="Enter Last Name" name="lName">
        </div>
        <div class="form-group">
            <label>Picture:</label>
            <input type="text" class="form-control" placeholder="Enter Picture Url" name="picture">
        </div>
        <div class="form-group">
            <label>Title:</label>
            <input type="text" class="form-control" placeholder="Enter Title" name="title">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" placeholder="Enter Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection
