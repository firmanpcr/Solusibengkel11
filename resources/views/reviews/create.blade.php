@extends('layouts.app') <!-- Sesuaikan dengan layout utama Anda -->

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Berikan Ulasan Anda</h2>
    <form action="{{ route('review.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
        </div>
        <div class="mb-3">
            <label for="review" class="form-label">Ulasan</label>
            <textarea class="form-control" id="review" name="review" rows="4" placeholder="Tulis ulasan Anda" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
    </form>
</div>
@endsection
