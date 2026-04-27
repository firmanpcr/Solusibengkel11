<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{
    public function index() {
        if (Auth::check()){
            return redirect()->route('dashboard');
        }
        return view('login-form');
    }


     public function login(Request $request) {
        //dd($request->all());
        // Validate input
       $request->validate([
        'email'    => 'required','email',
        'password' => 'required|min:6|regex:/[A-Z]/'
    ]);

        // Pengecekan Email & Password menggunakan Hash::check()
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {

            Auth::login($user);
            return redirect()->route('home');

        }else{
            return redirect()->route('login')->with('gagal', 'Silahkan coba lagi');
        }
        // Validate input
        //$request->validate([
          //  'username' => 'required',
            //'password' => 'required|min:3|regex:/[A-Z]/'
        //]);

        //$username = $request->username;
        //$password = $request->password;



//        if ($username == 'Assyifa23' && $password == 'Assyifa23') {
  //          $result = 'success';
    //        $message = 'Login successful!';
      //      session(['sess_username' => $request->username]);
        //    session(['date' => date ('Y-m-d H:i:s')]);
          //  return redirect()->route('home')->with('berhasil','Berhasil Login');


        //} else {
          //  Session::flush();
            //return redirect('/auth')->with('gagal','tidak Berhasil Login');
           // $result = 'error';
           // $message = 'Invalid credentials, please try again.';
      //  }

        //return view('login-form'); [
            //'result' => $result,
            //'message' => $message
     //   ];}
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login
        return redirect()->route('login');
    }
        //project
        public function register(){
            return view ('register');
        }
        public function regis(Request $request){
            // Validate input
            $request->validate([
                'name' => 'required|regex:/^[a-zA-Z\s]+$/', // Nama tidak boleh mengandung angka atau simbol, hanya huruf dan spasi
                'address' => 'required|max:300', // Alamat maksimal 300 karakter
                'birth_date' => ['required', 'date'],
                'username' => 'required', // Hanya huruf yang diperbolehkan
                'email' => ['required', 'email'],
                'password' => 'required|min:8|regex:/[A-Z]/|regex:/[0-9]/', // Minimal 8 karakter, harus ada huruf kapital dan angka
                 // Tanggal lahir harus berupa tanggal yang valid dan sebelum hari ini
            ]);

            // Proses lebih lanjut jika validasi berhasil
            return view('login');
        }
        public function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}


public function handleGoogleCallback()
{
    $googleUser = Socialite::driver('google')->stateless()->user();
    $email_user = $googleUser->email;
    //dd($email_user);
    $user = User::where('email', $email_user)->first();
        if ($user) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('gagal', 'Silahkan Coba Lagi');
        }
}

}
