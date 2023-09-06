<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SessionController extends Controller
{
    public function index(){
        return view('admin.formlogin');
    }

    // public function login(Request $request){
    //     dd($request->all());
    // }

    // public function index()
    // {
    //     return view('admin.formlogin');
    // }

    function logout(){
        Auth::logout() ;
        return redirect ('formlogin');
    }

    // public function logout(Request $request)
    // {
        
    //     return redirect('formlogin'); // Ganti dengan halaman tujuan setelah logout
    // }
    

    public function login(Request $request)
    {
        $infologin = $request->validate([
            'username'=>'required',
            'password'=>'required',
        // ], [
        //     'username.required' => 'username wajib diisi',
        //     'password.required' => 'password wajib diisi'
        ]);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        // dd('berhasil');
        if(Auth::attempt($infologin)) {
            return redirect('dashboard');

            // return redirect()->route('dashboard');
            // return view('admin.layout.dashboard');
            // echo 'sukses';
            // $request->session()->regenerate();
 
            // return redirect()->intended('dashboard');
        } else {
            // return redirect('formlogin')->withErrors ('Username dan password yang dimasukkan tidak sesuai')->withInput ();
            return redirect('formlogin');

            // echo 'gagal';
            // <script lang="javascript">
            // alert('Username atau Password yang Anda Masukkan Salah');
            // </script>
        }
    }
}
