<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // login
    public function login(){
        return view('auth.login');
    }
    // authenticate
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Toastr::success('Anda Berhasil Login', 'Selamat', ["positionClass" => "toast-top-right"]);
            return redirect()->route('masyarakat.dashboard');
        }elseif (Auth::guard('petugas')->attempt($credentials)){
            $request->session()->regenerate();
            Toastr::success('Anda Berhasil Login', 'Selamat', ["positionClass" => "toast-top-right"]);
            return redirect()->route('masyarakat.dashboard');
        }
        Toastr::error('Sepertinya Username & Password anda salah', 'Maaf', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    // register
    public function register(){
        return view('auth.register');
    }
    // data regis
    public function storeRegister(Request $request){
        $validator = $request->validate([
            'nama' => 'required',
            'telp' => 'required|unique:masyarakats,telp',
            'email' => 'required',
            'username' => 'required|unique:masyarakats,username',
            'jenis_kelamin' => 'required',
            'password' => 'required',
        ]);
        try {
            $validator['password'] = Hash::make($request->password);
            Masyarakat::create($validator);
            Toastr::success('Data Berhasil di tambah', 'OK', ["positionClass" => "toast-top-right"]);
            return redirect()->route('route.login');
        } catch (Throwable $th) {
            Toastr::info('Sepertinya nama pengguna sudah ada', 'Maaf', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    public function logout(){
        if(Auth::guard('masyarakat')->check()){
            Auth::guard('masyarakat')->logout();
        }elseif(Auth::guard('petugas')->check()){
            Auth::guard('petugas')->logout();
        }
        Toastr::info('Anda Berhasil Keluar ', 'OK', ["positionClass" => "toast-top-right"]);
        return redirect()->route('routeLP.landing');
    }

    // landingPage
    public function landingpage(){
        return view('LandingPage');
    }
}
