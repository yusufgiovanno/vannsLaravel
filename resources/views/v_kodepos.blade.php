@extends('layouts.master')
@section('title', 'Admin')
@section('content')

    <h2>
        <center>Pencarian Wilayah</center>
    </h2>
    <form action="wilayah" method="GET">
        @csrf
        <div class="form-group">
            <label>Wilayah:</label>
            <input type="text" class="form-control" placeholder="Masukkan Provinsi Kota / Kecamatan / Kelurahan / Kode Pos"
                name="kode">
        </div>
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>

    @if (isset($data))

        <center>
            <h4>Hasil Pencarian</h4>
        </center>

        <table class="table table-bordered" id="datatable-buttons">
            <thead class="thead-light">
                <tr>
                    <th>No.</th>
                    <th>Kode Pos</th>
                    <th>Provinsi</th>
                    <th>Kota</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                </tr>
            </thead>
            @foreach ($data as $datas)
                <tr>
                    <td>{!! $loop->index + 1 !!}</td>
                    <td>{!! $datas['postalcode'] !!}</td>
                    <td>{!! $datas['province'] !!}</td>
                    <td>{!! $datas['city'] !!}</td>
                    <td>{!! $datas['subdistrict'] !!}</td>
                    <td>{!! $datas['urban'] !!}</td>

                </tr>
            @endforeach
            <tbody>
        </table>

    @endif

@endsection
