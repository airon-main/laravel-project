@extends('layouts.main')

@section('content')
<h1>ini adalah halaman <?= $title; ?></h1>
<p>nama: <?= $name; ?></p>
<p>kelas: <?= $kelas; ?></p>
<p>foto: <img src="<?= $photo; ?>" width="200"/></p>
@endsection