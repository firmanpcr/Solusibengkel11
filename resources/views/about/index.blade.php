<!-- resources/views/about/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">{{ $aboutData['title'] }}</h1>

        <p class="lead text-center">{{ $aboutData['description'] }}</p>

        <h3 class="mt-4">Layanan Kami:</h3>
        <ul>
            @foreach ($aboutData['services'] as $service)
                <li>{{ $service }}</li>
            @endforeach
        </ul>

        <h3 class="mt-4">Kontak Kami:</h3>
        <p>Alamat: {{ $aboutData['contact']['alamat'] }}</p>
        <p>Telepon: {{ $aboutData['contact']['telepon'] }}</p>
        <p>Email: <a href="mailto:{{ $aboutData['contact']['email'] }}">{{ $aboutData['contact']['email'] }}</a></p>
    </div>
@endsection
