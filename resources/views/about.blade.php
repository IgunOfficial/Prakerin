@extends('layouts.admin')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @section('content')
    <center>
        <h1><b><i>HALOO</i></b></h1>
        <hr style="width: 300px; margin-top: 20px;">
        <h3>Selamat Datang <i>{{ Auth::user()->name }}</i></h3>
        <h5>Di Website Berita Ngawur</h4>
    </center>
    @endsection
</body>
</html>