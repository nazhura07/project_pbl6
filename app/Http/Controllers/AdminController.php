<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Konselor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function berandaAdmin()
    {
        return view('pages.admin.beranda');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function artikelAdmin()
    {
        return view('pages.admin.artikel.artikel');
    }

    public function artikelCreate(){
        return view('pages.admin.artikel.createartikel');
    }

    public function artikelStore(Request $request){

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pendidikan_terakhir' => 'required',
            'alamat' => 'required',
            'spesialis' => 'required|string',
            'jenis_kelamin' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses penyimpanan data konselor ke dalam database
        $fotoPath = $request->file('foto')->store('konselor_photos', 'public');

        Konselor::create([
            'nama' => $request->input('nama'),
            'spesialisasi' => $request->input('spesialis'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'pendidikan_terakhir' => $request->input('pendidikan_terakhir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'foto' => $fotoPath,
        ]);

        // Redirect kembali ke halaman dengan pesan sukses
        return redirect()->route('admin.konselor')->with('success', 'Konselor berhasil ditambahkan!');
    }

    public function konselorAdmin()
    {
        return view('pages.admin.konselor.konselor');
    }

    public function konselorCreate(){
        return view('pages.admin.konselor.createkonselor');
    }

    public function konselorStore(){

    }
}
