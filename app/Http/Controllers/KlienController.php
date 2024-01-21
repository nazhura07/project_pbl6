<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use App\Models\Artikel;
use App\Http\Requests\StoreKlienRequest;
use App\Http\Requests\UpdateKlienRequest;
use App\Models\Konselor;

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
        // $data = Konselor::all();
        return view('pages.klien.konselor');
    }
    public function detailProfileKonselor($id)
    {
        return view('pages.klien.detailprofile', compact('data'));
    }
    public function janjitamuKlien($id)
    {
        return view('pages.klien.janjitemu');
    }
    public function janjitamuKlienStore($id){
        
    }

    public function jadwal(){
        return view('pages.klien.jadwal');
    }

    public function ubahjadwal($id){

    }
}
