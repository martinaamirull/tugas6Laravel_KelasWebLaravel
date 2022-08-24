@extends('layout.master')
@section('judul')
Halaman Detail Cast
@endsection
@section('content')

<h1>{{$castDetail->nama}}</h1>
<p>{{$castDetail->umur}}</p>
<p>{{$castDetail->bio}}</p>

<a href="/cast" class="btn btn-secondary btn-sm">kembali</a>
@endsection