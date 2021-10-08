@extends('layouts.master')
@section('title', 'Admin')
@section('content')

<center><h4>Fetched Data</h4></center>

<table class="table table-bordered" id="datatable-buttons">
    <thead class="thead-light">
        <tr>
            <th>No.</th>
            <th>Provinsi</th>
            <th>Positif</th>
            <th>Sembuh</th>
            <th>Meninggal</th>
        </tr>
    </thead>
    @foreach ($data as $datas)
    <tr>
        <td>{!! $loop->index + 1                                          !!}</td>
        <td>{!! $datas->attributes->Provinsi                              !!}</td>
        <td>{!! number_format($datas->attributes->Kasus_Posi,0, ',', '.') !!}</td>
        <td>{!! number_format($datas->attributes->Kasus_Semb,0, ',', '.') !!}</td>
        <td>{!! number_format($datas->attributes->Kasus_Meni,0, ',', '.') !!}</td>
        
    </tr>
    @endforeach
    <tbody>
</table>

@endsection
