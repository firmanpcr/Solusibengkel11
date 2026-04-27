<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageData['dataMitra'] = Mitra::all();
        return view('mitra.index', $pageData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mitra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
      $request->validate([
            'nama_mitra'        => ['required','max:200'],
            'alamat'            => ['nullable'],
            'email'             => ['required','email','max:50'],
            'nomor_telepon'     => ['required','numeric'],
            'jenis_kemitraan'   => ['required','in:Platinum,Gold,Silver'],
            'tanggal_bergabung' => ['required','date'],
            'agreement'         => ['accepted'], // Validasi agar checkbox harus dicentang
        ]);
        $data['nama_mitra'] = $request->nama_mitra;
        $data['alamat'] = $request->alamat;
        $data['email'] = $request->email;
        $data['nomor_telepon'] = $request->nomor_telepon;
        $data['jenis_kemitraan'] = $request->jenis_kemitraan;
        $data['tanggal_bergabung'] = $request->tanggal_bergabung;

Mitra::create($data);

return redirect()->route('mitra.list')->with('success','Penambahan Mitra Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $param1)
    {
    $pageData['dataMitra'] = Mitra::findOrFail($param1);
    return view('Mitra.edit', $pageData);
    }


    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request)
{
    // Validasi input
    $request->validate([
        'mitra_id'                  => ['required'],
        'nama_mitra'                => ['required'],
        'email'                     => ['required', 'email'],
        'alamat'                    => ['required'],
        'nomor_telepon'             => ['required', 'numeric'],
        'jenis_kemitraan'           => ['required', 'in:Platinum,Gold,Silver'],
        'tanggal_bergabung'         => ['required', 'date'],
    ]);


    $mitra_id = $request->mitra_id;
    $mitra = Mitra::findOrFail($mitra_id);

    $mitra->nama_mitra              = $request->nama_mitra;
    $mitra->email                   = $request->email;
    $mitra->alamat                  = $request->alamat;
    $mitra->nomor_telepon           = $request->nomor_telepon;
    $mitra->jenis_kemitraan         = $request->jenis_kemitraan;
    $mitra->tanggal_bergabung       = $request->tanggal_bergabung;

    $mitra->save();
    return redirect()->route('mitra.list')->with('success', 'Perubahan Data Mitra Berhasil!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $param1)
{
    $mitra = Mitra::findOrFail($param1);
    $mitra->delete();
    return redirect()->route('mitra.list')->with('success', 'Penghapusan Data Mitra Berhasil!');
}

}
