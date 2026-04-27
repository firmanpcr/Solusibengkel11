<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolusiBengkelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Selamat Datang di SolusiBengkel';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(String $param1, String $param2)
    {
        echo "simpan SolusiBengkel dengan data nama: '.$param1.', Alamat: '.$param2.'";   }

    /**
     * Display the specified resource.
     */
    public function show(string $param1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
