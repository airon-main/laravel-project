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
    <a type="button" class="btn btn-primary margin_bottom_10" href="/student/add">Add new Data</a>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session ('success')}}
        </div>
    @endif
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $key=>$student)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{$student['nis']}}</td>
                <td>{{$student['nama']}}</td>
                <td>{{$student->kelas->nama}}</td>
                <td>
                    <a type="button" class="btn btn-primary" href="/student/detail/{{$student['id']}}">Detail</a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection