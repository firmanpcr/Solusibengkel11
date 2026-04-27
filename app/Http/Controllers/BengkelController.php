<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BengkelController extends Controller
{
    // Fungsi untuk menampilkan pesan selamat datang
    public function welcome()
    {
        return 'Selamat Datang di SolusiBengkel';
    }

    // Fungsi untuk menampilkan tanggal dan waktu saat ini
    public function currentTime()
    {
        return 'Tanggal dan waktu saat ini: ' . date('Y-m-d H:i:s');
    }

    // Fungsi untuk mengambil parameter dan melakukan operasi
    public function handleParams($param1, $param2)
    {
        if ($param1 == 0 && $param2 == 0) {
            return "Silahkan masuk parameter";
        } elseif ($param1 == 0) {
            return $param2; // Mengembalikan parameter 2
        } elseif ($param2 == 0) {
            return $param1; // Mengembalikan parameter 1
        } else {
            return $param1 * $param2; // Mengalikan parameter 1 dan 2
        }
    }
}
