<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Klien;


class AuthKlienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        return view('pages.user.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AuthloginKlien(Request $request){
    
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

    try {
        $succeslogin = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        info('Login Attempt', [
            'email' => $request->email,
            'password' => $request->password,
            'success' => $succeslogin,
        ]);
        // dd($succeslogin, $request->email, $request->password);
        if ($succeslogin) {
            return redirect()->route('beranda')->with('success', 'Login berhasil');
        } else {
            return back()->withErrors(['login' => 'Email Atau Password Salah']);
        }
    } catch (\Exception $e) {
        // Tangani pengecualian di sini
            info('Exception during login', ['exception' => $e]);
            return back()->withErrors(['error' => 'Terjadi kesalahan saat login.']);
    }
}
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
    public function store(Request $request){

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'password' => 'required',
            'konfirmasi_password' => 'required|same:password',
        ]);
        $data = new Klien();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->password = $request->password;
        $data->save();
        return redirect('/beranda')->with('success', 'Akun Berhasil dibuat');
    }
    public function show(){
        return view('pages.user.register');
    }
    
}

