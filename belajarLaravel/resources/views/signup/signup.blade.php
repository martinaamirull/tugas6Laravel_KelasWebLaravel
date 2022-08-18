{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='UTF-8'>
        <meta htp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Sign Up</title>
    </head>
    <body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2> --}}
{{-- tanpa adminLTE tugas release 1 --}}
    
    @extends('layout.master')
    @section('judul')
    Form Sign Up
    @endsection
    @section('content')
        

    <form action="/kirim"  method="post">
        @csrf
        <label for="fn">First Name :</label><br>
        <input type="text" name="fname"><br><br>
        <label for="ln">Last Name :</label><br>
        <input type="text" name="lname"><br><br>
        <label>Gender :</label><br>
        <input type="radio" name="gender" checked>Male<br>
        <input type="radio" name="gender">Female<br>
        <br>
        <!--gk ada gender orther min para suhuu hehe-->
        <label>Nationality :</label><br>
        <select>
            <option value="indonesia">Indonesian</option>
            <option value="afrika">Afrika</option>
            <option value="zimbabwe">Zimbabwe</option>
            <option value="kongo">Kongo</option>
        </select>
        <br><br>
        <label>Language Spoken :</label><br>
        <input type="checkbox" name="bahasa">English<br>
        <input type="checkbox" name="bahasa" checked>Indonesia<br>
        <input type="checkbox" name="bahasa">Orther
        <br><br>
        <label for="bio">Bio :</label><br>
        <textarea cols="40" rows="7" id="bio" id="bio"></textarea>
        <br><br>
        <input type="submit" value="kirim" >



    </form>
    @endsection
    {{-- </body>
</html> --}}