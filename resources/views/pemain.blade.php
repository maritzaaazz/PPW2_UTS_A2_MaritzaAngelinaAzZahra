@extends('layout')

@include('navbar')

@section('title', 'Daftar Pemain')
@section('header', 'Daftar Pemain')

@section('content')

<div class="container">
    <table border="1 px" class="table table-striped table-bordered table-hover mb-4 mx-auto">
    <thead>
        <th>id</th>
        <th>Nama Pemain</th>
        <th>No Punggung</th>
        <th>Posisi</th>
    </thead>
    <tbody>
        @foreach ($data_pemain as $pemain)
            <tr>
                <td>{{ $pemain->id }}</td>
                <td>{{ $pemain->nama_pemain }}</td>
                <td>{{ $pemain->no_punggung }}</td>
                <td>{{ $pemain->posisi }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection