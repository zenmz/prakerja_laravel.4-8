@extends('template')
@section('main')
    <h1>Hello {{ Auth::user()->name }}</h1>
    <h2>Ini halaman User</h2>
@endsection