<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use App\Models\Artikel;
use App\Models\Konselor;
use Illuminate\Http\Request;
use App\Models\SesiKonseling;
use App\Http\Requests\StoreKlienRequest;
use App\Http\Requests\UpdateKlienRequest;
use App\Models\JamKonseling;

class KlienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function berandaKlien(){
        return view('pages.klien.beranda');
    }
    public function artikelKlien()
    {
        $artikels = Artikel::all();
        return view('pages.klien.artikel', compact('artikels'));
    }
    public function konselorKlien(){
        $konselor = Konselor::all();
        return view('pages.klien.konselor',compact('konselor'));
    }
    public function detailProfileKonselor($id)
    {
        $data = Konselor::findorFail($id);
        // dd($data);
        return view('pages.klien.detailprofile', compact('data'));
    }
    public function janjitamuKlien($id)
    {
        $konselor = Konselor::with('jamKonselings')->findOrFail($id);
        // dd($konselor);
        return view('pages.klien.janjitemu', compact('konselor'));
    }
    public function janjitamuKlienStore($id){
        
    }

    public function jadwal(){
        return view('pages.klien.jadwal');
    }

    public function ubahjadwal($id){

    }
    public function create()
    {
        return view('janji_temu.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $data = $request->validate([
            'tanggal' => 'required|date',
            'jam' => 'required|in:1,2,3,4,5,6', // Add any other validation rules as needed
        ]);

        // Process the form submission and store the data in the database
        // You can customize this part based on your needs

        // Example: Create a new JanjiTemu record in the database
        $janjiTemu = new SesiKonseling([
            'tanggal' => $data['tanggal'],
            'waktu_mulai' => $data[''],
        ]);

        $janjiTemu->save();

        // You can redirect to a success page or do other actions here
        return redirect()->route('success')->with('success', 'Janji Temu berhasil dibuat!');
    }
    public function ratingKlien(){
        return view('pages.klien.rating');
    }
    public function ratingKlienStore(){
        
    }

}
