@extends('layouts.main')

@section('content')
<h2>Student Detail</h2>
<div class="form">
<div class="form-group">
        <label for="">unique id</label>
        <input type="text" class="form-control" name="id" id="id" value="{{$kelas->id}}" disabled>
    </div>
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{$kelas->nama}}" disabled>
    </div>
</div>
@endsection