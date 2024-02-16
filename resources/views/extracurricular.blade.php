@extends('layouts.main')

@section('content')
<style>
    .flex{
        margin: 100px;
        border: 1px solid #c6c7c8;
    }
</style>
<div class="flex">
<table class="table table-light">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Pembina</th>
            <th scope="col">Deskripsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($extras as $extra)
        <tr>
            <th scope="row">{{ $extra['id'] }}</th>
            <td>{{$extra['nama']}}</td>
            <td>{{$extra['pembina']}}</td>
            <td>{{$extra['deskripsi']}}</td>
        </tr>
        @endforeach
        <!-- <tr>
            <th scope="row">1</th>
            <td>001</td>
            <td>Aan Kurniawan</td>
            <td>11 PPLG 1</td>
            <td>Sumbawa</td>
        </tr> -->
    </tbody>
</table>
</div>
@endsection