@extends('htmltemplate.layout')

@section('title', 'Welcome to SanberCode')

@section('content')
    <h1>Selamat Datang {{ $firstname }} {{ $lastname }}!</h1>
    <h2>Terima Kasih telah bergabung di SanberBook. Social Media kita bersama!</h2>
@endsection