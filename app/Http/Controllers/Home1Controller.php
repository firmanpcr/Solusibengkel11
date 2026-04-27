<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(String $param1 = '')
    {
        $data['username']   = 'SOLUSIBENGKEL';
        $data['toggle_component'] = $param1;
        $data['hide'] = $param1;
        return view('simple-home', $data);
        
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
    public function store(Request $request)
    {
        //
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

    public function signup(Request $request)
    {
        $request->validate([
		    'name'  => 'required|max:3',
		    'email' => ['required','email'],
		    'password' => [
		        'required',           // Wajib diisi
		        'string',             // Harus berupa string
		        'min:8',              // Minimal 8 karakter
		        'regex:/[a-z]/',      // Harus mengandung setidaknya 1 huruf kecil
		        'regex:/[A-Z]/',      // Harus mengandung setidaknya 1 huruf besar
		        'regex:/[0-9]/',      // Harus mengandung setidaknya 1 angka
		    ],
		],[
            'name.required' => 'Nama tidak boleh kosong',
            'name.max'      => 'maksimal 3 huruf',
        ]);

        //dd($request->all());
        $pageData['name']     = $request->name;
        $pageData['email']    = $request->email;
        $pageData['password'] = $request->password;
        return view('signup-success', $pageData);

    }

    public function old()
    {
        //
    }

    public function redirectTo(String $param1)
    {
      if ($param1 == 'login') {
        return redirect('/auth')->with('asal','file HomeController');
      }
      else if($param1 == 'belanja'){
        return redirect()->away('https://www.bengkelbos.co.id/');
      }
    }
}
