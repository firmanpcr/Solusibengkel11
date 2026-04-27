@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow">
                <div class="card-header text-center bg-danger text-white">
                    <h3>Booking Berhasil!</h3>
                </div>
                <div class="card-body bg-white">
                    @if(session('berhasil'))
                        <div class="alert alert-success text-center">
                            <strong>Terima kasih!</strong> Booking Anda berhasil.
                            <p>Detail Booking Anda:</p>
                            <ul class="list-unstyled">
                                <li><strong>Nama:</strong> {{ session('name') }}</li>
                                <li><strong>Email:</strong> {{ session('email') }}</li>
                                <li><strong>Service:</strong> {{ session('service') }}</li>
                                <li><strong>Tanggal:</strong> {{ session('date') }}</li>
                                <li><strong>Permintaan Khusus:</strong> {{ session('request') }}</li>
                            </ul>
                        </div>
                    @else
                        <div class="alert alert-danger text-center">
                            Tidak ada data booking.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
