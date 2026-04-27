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
                    <li class="breadcrumb-item"><a href="{{ route('mekanik.list') }}">Mekanik</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
                </ol>
            </nav>
            <h2 class="h4">Edit Data Mekanik</h2>
            <p class="mb-0">Form Perubahan Data Mekanik Baru</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('mekanik.list') }}" class="btn btn-sm"
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

        <form action="{{ route('mekanik.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="name">Nama</label>
                    <input class="form-control" id="name" name="name" type="text"
                        placeholder="Masukkan nama Anda" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" name="email" type="email"
                        placeholder="nama@perusahaan.com" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="***" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="experience_years">Pengalaman Kerja</label>
                    <select class="form-control" id="experience_years" name="experience_years" required>
                        <option value="" disabled selected>Pilih pengalaman kerja</option>
                        @for ($i = 0; $i <= 50; $i++)
                            <!-- Batas maksimal pengalaman kerja -->
                            <option value="{{ $i }}">{{ $i }} Tahun</option>
                        @endfor
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="keahlian">Keahlian</label>
                    <select class="form-select mb-0" id="keahlian" name="keahlian" aria-label="Role select example">
                        <option selected>Keahlian</option>
                        <option value="Mesin">Mesin</option>
                        <option value="Bodi">Bodi</option>
                        <option value="Ban">Ban</option>
                        <option value="Kelistrikan">Kelistrikan</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="phone">Telepon</label>
                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="+12-345 678 910"
                        required>
                </div>
            </div>
        </form>

        <div class="mt-3">
            <button class="btn btn-info text-white mt-2 animate-up-2" type="submit">Simpan Perubahan</button>
        </div>
        <input type="hidden" name="mekanik_id" value="{{ $dataMekanik->mekanik_id }}" />
        </form>
    </div>
    {{-- end main content --}}
@endsection
