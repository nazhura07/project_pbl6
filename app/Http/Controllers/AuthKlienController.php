<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Klien;
use App\Models\User;


class AuthKlienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        return view('pages.login');
    }
    public function homeKlien()
    {
        return view('pages.klien.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AuthloginKlien(Request $request){
    
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');

        $successLogin = Auth::guard('web')->attempt($credentials);

        if ($successLogin) {
            return redirect()->route('klien.beranda')->with('success', 'Login berhasil');
        } else {
            return back()->withErrors(['login' => 'Email Atau Password Salah']);
        }
}
    public function AuthloginAdmin(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('name', 'password');

        $successLogin = Auth::guard('admin')->attempt($credentials);

        if ($successLogin) {
            return redirect()->route('beranda')->with('success', 'Login berhasil');
        } else {
            return back()->withErrors(['login' => 'Nama Atau Password Salah']);
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('klien.home')->with('success', 'Logout Berhasil');
    }
    public function store(Request $request){

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'password' => 'required',
        ]);
        $data = new Klien();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->password = $request->password;
        $data->save();
        return redirect('/login')->with('registerSukses', 'Akun Berhasil dibuat');
    }
    public function show(){
        return view('pages.klien.register');
    }
    
}

