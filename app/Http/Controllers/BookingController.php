<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filterableColumns = ['pilih_service'];
        $searchableColumns = ['name'];
        $pageData['dataBooking'] = Booking::filter($request, $filterableColumns, $searchableColumns)
            ->paginate(10)
            ->onEachSide(2)
            ->withQueryString();
        return view('admin.booking.index', $pageData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.booking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'pilih_service' => ['required', 'in:Service Motor,Service Mobil,Perawatan Berkala,Pengecekan'],
            'tanggal_service' => ['required', 'date'],
            'permintaan_khusus' => '',

        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['pilih_service'] = $request->pilih_service;
        $data['tanggal_service'] = $request->tanggal_service;
        $data['permintaan_khusus'] = $request->permintaan_khusus;
        Booking::create($data);
        return redirect()->route('booking.list')->with('success', 'Penambahan Data Berhasil!');
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
    public function edit(string $id)
    {
        $pageData['dataBooking'] = Booking::findOrFail($param1);
        return view('admin.booking.edit', $pageData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'pilih_service' => ['required', 'in:Service Motor,Service Mobil,Perawatan Berkala,Pengecekan'],
            'tanggal_service' => ['required', 'date'],
            'permintaan_khusus' => [''],

        ]);

        $booking_id = $request->booking_id;
        $booking = Booking::findOrFail($booking_id);

        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->pilih_service = $request->pilih_service;
        $booking->tanggal_service = $request->tanggal_service;
        $booking->permintaan_khusus = $request->permintaan_khusus;

        $booking->save();

        return redirect()->route('booking.list')->with('success', 'Perubahan data booking Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = Booking::findOrFail($param1);

        $booking->delete();

        return redirect()->route('booking.list')->with('success', 'Penghapusan data booking Berhasil!');
    }
}
