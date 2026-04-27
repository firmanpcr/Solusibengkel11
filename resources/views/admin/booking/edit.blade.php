@extends('layouts.admin.app')
@section('content')
    {{-- start main content --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('booking.list') }}">Booking</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
                </ol>
            </nav>
            <h2 class="h4">Edit Data Booking</h2>
            <p class="mb-0">Form Perubahan Data Booking Baru</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('booking.list') }}" class="btn btn-sm"
                style="background-color: #333333; color: white; d-inline-flex align-items-center;">
                Kembali
            </a>

        </div>
    </div>

    <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5 mb-4">General information</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('booking.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div>
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" value="{{ old('name') }}" type="text"
                            placeholder="Enter your name" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" name="email"type="email" placeholder="name@company.com"
                            required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="pilih_service">Pilih Service</label>
                    <select class="form-select mb-0" id="pilih_service" name="pilih_service" aria-label="">
                        <option selected>Pilih Service</option>
                        <option value="Service Motor">Service Motor</option>
                        <option value="Service Mobil">Service Mobil</option>
                        <option value="Perawatan Berkala">Perawatan Berkala</option>
                        <option value="Pengecekan">Pengecekan</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tanggal_service">Tanggal Service</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <input data-datepicker="" class="form-control" id="tanggal_service" name="tanggal_service"
                            value="" type="date" placeholder="dd/mm/yyyy" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="permintaan_khusus">Permintaan Khsuus</label>
                        <input class="form-control" id="permintaan_khusus" name="permintaan_khusus" type="text"
                            placeholder="Masukkan Permintaan Anda" required>
                    </div>
                </div>
            </div>
    </div>

        <div class="mt-3">
            <button class="btn btn-info text-white mt-2 animate-up-2" type="submit">Simpan Perubahan</button>
        </div>
        <input type="hidden" name="booking_id" value="{{ $dataBooking->booking_id }}" />
        </form>
    </div>
    {{-- end main content --}}
@endsection
