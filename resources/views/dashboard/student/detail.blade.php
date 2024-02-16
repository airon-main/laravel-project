@extends('layouts.main')

@section('content')
<h2>Student Detail</h2>
<div class="form">
    <div class="form-group">
        <label for="">Nis</label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{$student->nis}}" disabled>
    </div>
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{$student->nama}}" disabled>
    </div>
    <div class="form-group">
        <label for="">Kelas</label>
        <input type="text" class="form-control" name="kelas_id" id="kelas_id" value="{{$student->kelas_id}}" disabled>
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" value="{{$student->alamat}}" disabled>
    </div>
    <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{$student->tgl_lahir}}" disabled>
    </div>
</div>
@endsection