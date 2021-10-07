@extends('layouts.master')
@section('title', 'Admin')
@section('content')

<center><h4>Fetched Data</h4></center>

<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th>No.</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Avatar</th>
        </tr>
    </thead>
    @foreach ($data as $datas)
    <tr>
        <td>{!! $loop->index + 1 !!}</td>
        <td>{!! $datas['first_name'] !!}</td>
        <td>{!! $datas['last_name'] !!}</td>
        <td>{!! $datas['email'] !!}</td>
        <td><img src="{!! $datas['avatar'] !!}"></td>
    </tr>
    @endforeach
    <tbody>
</table>

@endsection
