@extends('layouts.main')

@section('content')
<style>
    .flex {
        margin: 100px;
    }
    .margin_bottom_10 {
        margin-bottom: 10px;
    }
</style>
<div class="flex">
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session ('success')}}
        </div>
    @endif
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelass as $key=>$kelas)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{$kelas['nama']}}</td>
                <td>
                    <a type="button" class="btn btn-primary" href="/kelas/detail/{{$kelas['id']}}">Detail</a>
                </td>
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