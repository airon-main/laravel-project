@extends('layouts.main')

@section('content')
<h2 class="m-3">Edit Student</h2>
<form class="form mx-3 d-grid gap-3" method="post" action="/student/update/{{$student->id}}">
    @csrf
    <div class="form-group">
        <label for="">Nis</label>
        <input type="number" class="form-control" name="nis" id="nis" value="{{ old('nis', $student->nis) }}">
    </div>
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $student->nama) }}">
    </div>
    <div class="form-group">
        <label for="">Kelas</label>
        <select class="form-label" name="kelas_id" id="">
            @foreach ($kelas as $satukelas)
                @if (old('kelas_id', $student->kelas_id == $satukelas->id))
                    <option name="kelas_id" value="{{ $satukelas->id }}" selected>{{$satukelas->nama}}</option>
                @endif
                    <option name="kelas_id" value="{{ $satukelas->id }}">{{$satukelas->nama}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" value="{{ old('alamat', $student->alamat) }}">
    </div>
    <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input type="datetime-local" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{ old('tgl_lahir', $student->tgl_lahir) }}">
    </div>
    <button type="submit" class="btn btn-primary margin_bottom_10">Post</button>
</form>
@endsection