@extends('layouts.main')

@section('content')
<h2 class="m-3">Add Student</h2>
<form class="form mx-3 d-grid gap-3" method="post" action="/kelas/store">
    @csrf
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}">
    </div>
    <button type="submit" class="btn btn-primary margin_bottom_10">Post</button>
</form>
@endsection