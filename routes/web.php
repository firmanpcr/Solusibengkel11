<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Home1Controller;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\BengkelController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\SolusiBengkelController;

Route::get('/Welcome', function () {
    return 'selamat Datang Di Solusi Bengkel';
});

Route:: get('/now',function(){
    return "Tanggal Dan Waktu Saat Ini: ".date('Y-m-d H;i;s');
});

Route::get('/info', function () {
    phpinfo();
});
Route :: get ('/calculate/{param1}/{param2}', function ($param1,$param2) {
    if ($param1 == 0 && $param2 == 0){
        return 'silahkan masuk parameter';
    } elseif ($param1 == 0){
        return 'nilai parameter 2: ' .$param2;
     }else if ($param2 == 0){
        return 'nilai parameter 1: ' .$param1;
     }else {
        return 'hasil perkalian: ' . ($param1 * $param2);
     }
    });

    Route::get('/welcome2', [SolusiBengkelController::class, 'welcome']);
    Route::get('/welcome2', [SolusiBengkelController::class, 'now']);
    Route::get('/calculate2/{param1}/{param2}', [SolusiBengkelController::class, 'calculate']);

    Route::get('/hello', [SolusiBengkelController::class, 'index']);
    Route::get('/data/{param1}/{param2}', [SolusiBengkelController::class, 'store']);
    //home//
    // Route::post('/home/signup', [Home1Controller::class, 'signup']);
    // Route::get('/home/{param1?}', [Home1Controller::class, 'index'])-> name('home1');
    // Route::get('/home/redirect/{param1?}', [Home1Controller::class, 'redirectTo']);

    Route::get('home', [HomeController::class, 'index'])-> name('home');
    // Auth //
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class,'regis'])->name('regis');
    Route::get('/login', [AuthController::class, 'index']);
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('visit',[PengunjungController::class,'index'])->name('visit');
    //Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');

    //Route::get('mitra',[MitraController::class, 'index'])->name('mitra.list');
    Route::get('mitra/create',[MitraController::class,'create'])->name('mitra.create');
    Route::post('mitra/store',[MitraController::class,'store'])->name('mitra.store');
    Route::get('mitra/edit/{param1}', [MitraController::class,'edit'])->name('mitra.edit');
    Route::post('mitra/update', [MitraController::class,'update'])->name('mitra.update');
    Route::get('mitra/destroy/{param1}', [MitraController::class,'destroy'])->name('mitra.destroy');

    //Route::get('pelanggan',[PelangganController::class, 'index'])->name('pelanggan.list');
    Route::get('pelanggan/create',[PelangganController::class,'create'])->name('pelanggan.create');
    Route::post('pelanggan/store',[PelangganController::class,'store'])->name('pelanggan.store');
    Route::get('pelanggan/edit/{param1}', [PelangganController::class,'edit'])->name('pelanggan.edit');
    Route::post('pelanggan/update', [PelangganController::class,'update'])->name('pelanggan.update');
    Route::get('pelanggan/destroy/{param1}', [PelangganController::class,'destroy'])->name('pelanggan.destroy');
    //Mekanik
    Route::get('mekanik',[MekanikController::class,'index'])->name('mekanik.list');
    Route::get('mekanik/create', [MekanikController::class,'create'])->name('mekanik.create');
    Route::post('mekanik/store', [MekanikController::class,'store'])->name('mekanik.store');
    Route::get('mekanik/edit/{param1}', [MekanikController::class,'edit'])->name('mekanik.edit');
    Route::post('mekanik/update', [MekanikController::class,'update'])->name('mekanik.update');
    Route::get('mekanik/destroy/{param1}', [MekanikController::class,'destroy'])->name('mekanik.destroy');

    //Route::get('user', [UserController::class,'index'])->name('user.list');
    Route::get('user/create', [UserController::class,'create'])->name('user.create');
    Route::post('user/store', [UserController::class,'store'])->name('user.store');
    Route::get('user/edit/{param1}', [UserController::class,'edit'])->name('user.edit');
    Route::post('user/update', [UserController::class,'update'])->name('user.update');
    Route::get('user/destroy/{param1}', [UserController::class,'destroy'])->name('user.destroy');

    //booking
    Route::get('booking/create', [BookingController::class,'create'])->name('booking.create');
    Route::post('booking/store', [BookingController::class,'store'])->name('booking.store');
    Route::get('booking/edit/{param1}', [BookingController::class,'edit'])->name('booking.edit');
    Route::post('booking/update', [BookingController::class,'update'])->name('booking.update');
    Route::get('booking/destroy/{param1}', [BookingController::class,'destroy'])->name('booking.destroy');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking');

    Route::get('/review/create', [ReviewController::class, 'create'])->name('review.create'); // Tampilkan form ulasan
    Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');  // Simpan ulasan

    //Group
    Route::group(['middleware'=>['checkislogin']],function(){
    //Route::group(['middleware'=>['checkrole:Administrator']],function(){
    Route::get('dashboard', [DashboardController::class, 'index']) ->name('dashboard');
    Route::get('pelanggan', [PelangganController::class, 'index']) ->name('pelanggan.list');
    Route::get('user', [UserController::class, 'index']) ->name('user.list');
    Route::get('mekanik', [MekanikController::class, 'index']) ->name('mekanik.list');
    Route::get('booking', [BookingController::class, 'index']) ->name('booking.list');

});
Route::get('/auth/redirect-google', [AuthController::class, 'redirectToGoogle'])->name('redirect.google');
Route::get('/oauthcallback', [AuthController::class, 'handleGoogleCallback']);

Route::get('/about', [AboutController::class, 'index'])->name('about');
