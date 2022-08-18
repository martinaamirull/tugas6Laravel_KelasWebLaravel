{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='UTF-8'>
        <meta htp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selamat Datang</title>
    </head> --}}
    {{-- <body> --}}
    {{-- sebelum pakai template adminlte --}}
    @extends('layout.master')
    @section('judul')
    Halaman Welcome   
    @endsection
    @section('content')
        
    
    <h1>Selamat Datang {{$namadepan}} {{$namabelakang}}</h1>
    <h3>Terima kasih telah bergabung di website kami. Media belajar kita bersama!</h3>
    @endsection
    {{-- </body>
</html> --}}