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
                    <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                </ol>
            </nav>
            <h2 class="h4">Tambah Data Booking</h2>
            <p class="mb-0">Form Tambah Data Booking Baru</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('booking.list') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                Kembali
            </a>
        </div>
    </div>

    <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5 mb-4">General information</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('booking.store') }}" method="POST" id="formBooking">
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
                        <input class="form-control" id="email" name="email" type="email"
                            value="{{ old('email') }}" placeholder="name@company.com" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="pilih_service">Pilih Service</label>
                    <select class="form-select mb-0" id="pilih_service" name="pilih_service" required>
                        <option value="" selected disabled>Pilih Service</option>
                        <option value="Service Motor" {{ old('pilih_service') == 'Service Motor' ? 'selected' : '' }}>Service Motor</option>
                        <option value="Service Mobil" {{ old('pilih_service') == 'Service Mobil' ? 'selected' : '' }}>Service Mobil</option>
                        <option value="Perawatan Berkala" {{ old('pilih_service') == 'Perawatan Berkala' ? 'selected' : '' }}>Perawatan Berkala</option>
                        <option value="Pengecekan" {{ old('pilih_service') == 'Pengecekan' ? 'selected' : '' }}>Pengecekan</option>
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
                            value="{{ old('tanggal_service') }}" type="date" placeholder="dd/mm/yyyy" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="permintaan_khusus">Permintaan Khusus</label>
                        <input class="form-control" id="permintaan_khusus" name="permintaan_khusus" type="text"
                            value="{{ old('permintaan_khusus') }}" placeholder="Masukkan Permintaan Anda">
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <button class="btn" style="background-color: #333333; color: white;" type="button" id="btnSimpan">
                    Booking Sekarang
                </button>
            </div>
        </form>
    </div>

    {{-- ============================================================
         MODAL: Konfirmasi Booking
         ============================================================ --}}
    <div class="modal fade" id="modalKonfirmasi" tabindex="-1" aria-hidden="true"
         data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 16px; overflow: hidden;">
                <div class="modal-body text-center p-5">

                    <div class="mb-4">
                        <div style="
                            width: 75px; height: 75px; border-radius: 50%;
                            background: #eef0fb; border: 2px solid #c5cef5;
                            display: flex; align-items: center; justify-content: center;
                            margin: 0 auto;">
                            <svg width="34" height="34" fill="none" stroke="#4a5bd4" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="12" y1="8" x2="12" y2="12"/>
                                <line x1="12" y1="16" x2="12.01" y2="16"/>
                            </svg>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-2" style="color: #1a1a2e;">Konfirmasi Booking</h5>
                    <p class="text-muted mb-1">Apakah semua data sudah benar?</p>
                    <p class="text-muted mb-4">Pastikan nama, email, tanggal, dan jenis service sudah sesuai sebelum menyimpan.</p>

                    <div class="d-flex gap-2 justify-content-center">
                        <button type="button" id="btnKonfirmasi" class="btn btn-sm px-4 py-2"
                            style="background-color: #333333; color: white; border-radius: 8px;">
                            Konfirmasi &amp; Simpan
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary px-4 py-2"
                            style="border-radius: 8px;" data-bs-dismiss="modal">
                            Batal
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>


    {{-- ============================================================
         SCRIPT — pakai window.onload agar Bootstrap pasti sudah siap
         ============================================================ --}}
    <script>
        window.onload = function () {
            const btnSimpan     = document.getElementById('btnSimpan');
            const btnKonfirmasi = document.getElementById('btnKonfirmasi');
            const form          = document.getElementById('formBooking');
            const modalEl       = document.getElementById('modalKonfirmasi');

            // Fungsi tampilkan modal dengan fallback
            function tampilkanModal() {
                if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
                    // Bootstrap 5
                    var modal = new bootstrap.Modal(modalEl);
                    modal.show();
                } else if (typeof $ !== 'undefined' && $.fn.modal) {
                    // Bootstrap 4 dengan jQuery
                    $('#modalKonfirmasi').modal('show');
                } else {
                    // Fallback: native confirm dialog
                    if (confirm('Apakah semua data sudah benar?\nKlik OK untuk menyimpan booking.')) {
                        form.submit();
                    }
                }
            }

            // Fungsi tutup modal dengan fallback
            function tutupModal() {
                if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
                    var modal = bootstrap.Modal.getInstance(modalEl);
                    if (modal) modal.hide();
                } else if (typeof $ !== 'undefined') {
                    $('#modalKonfirmasi').modal('hide');
                }
            }

            // Klik "Booking Sekarang"
            btnSimpan.addEventListener('click', function () {
                if (!form.checkValidity()) {
                    form.reportValidity();
                    return;
                }
                tampilkanModal();
            });

            // Klik "Konfirmasi & Simpan"
            btnKonfirmasi.addEventListener('click', function () {
                btnKonfirmasi.disabled = true;
                btnKonfirmasi.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Menyimpan...';
                form.submit();
            });
        };
    </script>
    {{-- end main content --}}
@endsection
@push('scripts')
<script>
    (function () {
        console.log('Script jalan');
        console.log('Bootstrap:', typeof bootstrap);

        var btnSimpan = document.getElementById('btnSimpan');
        console.log('btnSimpan:', btnSimpan);

        if (!btnSimpan) {
            console.error('btnSimpan tidak ditemukan!');
            return;
        }

        var btnKonfirmasi = document.getElementById('btnKonfirmasi');
        var form          = document.getElementById('formBooking');
        var modalEl       = document.getElementById('modalKonfirmasi');

        btnSimpan.addEventListener('click', function () {
            console.log('btnSimpan diklik');
            alert('Tombol diklik! Bootstrap = ' + typeof bootstrap);

            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            var modalObj = new bootstrap.Modal(modalEl);
            modalObj.show();
        });

        btnKonfirmasi.addEventListener('click', function () {
            btnKonfirmasi.disabled = true;
            btnKonfirmasi.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span> Menyimpan...';
            form.submit();
        });
    })();
</script>
@endpush
