<?php

namespace App\Http\Controllers;

use App\Models\Mekanik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MekanikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $searchableColumns = ['name'];
        $filterableColumns = ['keahlian'];
        $pageData['dataMekanik'] = Mekanik::filter($request,$searchableColumns,$filterableColumns)
        ->paginate(10)
        ->onEachSide(2)
        ->withQueryString();
        return view('admin.mekanik.index', $pageData);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mekanik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'             => ['required'],
            'email'            => ['required', 'email'],
            'password'         => ['required'],
            'experience_years' => 'required|integer|min:0',
            'keahlian'         => ['required', 'in:Mesin,Bodi,Ban,Kelistrikan'],
            'phone'            => 'required|string|max:15',
        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['experience_years'] = $request->experience_years;
        $data['keahlian'] = $request->keahlian;
        $data['phone'] = $request->phone;

		Mekanik::create($data);

        return redirect()->route('mekanik.list')->with('success', 'Penambahan Mekanik Berhasil!');
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
        $pageData['dataMekanik'] = Mekanik::findOrFail($param1);
        return view('admin.mekanik.edit', $pageData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'             => ['required'],
            'email'            => ['required', 'email'],
            'password'         => ['required'],
            'experience_years' => 'required|integer|min:0',
            'keahlian'         => ['required', 'in:Mesin,Bodi,Ban,Kelistrikan'],
            'phone'            => 'required|string|max:15',
        ]);
        $id = $request->id;
        $mekanik = mekanik::findOrFail($id);


        $mekanik->name       = $request->name;
        $mekanik->email      = $request->email;
        $mekanik->password   = $request->password;
        $mekanik->experience_years    = $request->experience_years;
        $mekanik->keahlian   = $request->keahlian;
        $mekanik->phone    = $request->phone;

        $mekanik->save();

        return redirect()->route('mekanik.list')->with('success', 'Perubahan Mekanik Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mekanik = Mekanik::findOrFail($param1);

        $mekanik->delete();

        return redirect()->route('mekanik.list')->with('success', 'Penghapusan Mekanik Berhasil!');
    }
}
