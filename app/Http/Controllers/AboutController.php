<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        // Data bengkel yang akan ditampilkan
        $aboutData = [
            'title' => 'Tentang Bengkel Kami',
            'description' => 'Bengkel kami adalah bengkel profesional yang melayani berbagai jenis perbaikan kendaraan dengan pengalaman lebih dari 10 tahun.',
            'services' => [
                'Perbaikan Mesin',
                'Service Berkala',
                'Perbaikan Sistem Kelistrikan',
                'Penggantian Oli',
                'Perbaikan Body dan Cat',
            ],
            'contact' => [
                'alamat' => 'Jl. Raya Bengkel No. 123, Jakarta',
                'telepon' => '021-12345678',
                'email' => 'info@bengkelkami.com',
            ]
        ];

        return view('about.index', compact('aboutData'));
    }
}

