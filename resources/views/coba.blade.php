@extends('template')
@section('main')
    <h1>Ini menggunakan view</h1>

    @for ($i = 0; $i < 10; $i++)
        @if ($i % 2)
            {{-- <h1>Ini perulangan dengan blade</h1> --}}
            <img src="{{ asset('img/photo-1678055702765-a9fbd945478e.jpeg') }}" alt="" width="300px">
        @endif
    @endfor

    @foreach ($data as $item)
        <h1>{{ $item }}</h1>
    @endforeach
@endsection
