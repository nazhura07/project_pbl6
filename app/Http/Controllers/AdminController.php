<?php

namespace App\Http\Controllers;

use App\Models\Users;
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

    public function artikelStore(){

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
