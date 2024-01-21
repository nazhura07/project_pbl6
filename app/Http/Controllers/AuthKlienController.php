<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Klien;
use App\Models\User;
use Spatie\Permission\Models\Role;

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
    public function authlogin(Request $request){
    
        $credentials  = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard("web")->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('klien.beranda'));
        }

        if (Auth::guard("admin")->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.beranda'));
        }

        if (Auth::guard("konselor")->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('konselor.beranda'));
        }

        return back()->with("loginError", "Email Atau Password Salah");
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('klien.home')->with('success', 'Logout Berhasil');
    }

    public function store(Request $request){

        $role = Role::where('id',1)->first();

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'password' => 'required',
        ]);
        
        $user = Klien::create($request->all());

        $user->assignRole($role);

        return redirect('/login')->with('registerSukses', 'Akun Berhasil dibuat');
    }
    public function show(){
        return view('pages.klien.register');
    }
    
}

