@extends('layout.master')
@section('judul')
Halaman List Cast
@endsection
@section('content')

    <a href="/cast/create" class="btn btn-primary btn-sm my-2">Tambah Cast</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($cast as $key=>$item)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->nama}}</td>
                <td>
                    <a href="/cast/{{$item->id}}"" class="btn btn-info btn-sm">Detail</a>
                </td>
              </tr>
          @empty
              <h1>Data Kosong</h1>
          @endforelse
        </tbody>
      </table>


@endsection