@extends('dashboard.layout.main')

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
    <a type="button" class="btn btn-primary" href="/dashboard/student/add">Add Student</a>
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
                    <a type="button" class="btn btn-primary" href="/dashboard/student/detail/{{$student['id']}}">Detail</a>
                    <a type="button" class="btn btn-secondary" href="/dashboard/student/edit/{{$student['id']}}">Edit</a>
                    <form action="/dashboard/student/delete/{{$student['id']}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                    </form>
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