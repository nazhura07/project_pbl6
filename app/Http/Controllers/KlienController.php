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
    public function artikel()
    {
        $artikels = Artikel::all();
        return view('pages.klien.artikel', compact('artikels'));
    }
    public function detailProfile()
    {
        $data = Konselor::all();
        return view('pages.klien.detailprofile', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKlienRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Klien $klien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Klien $klien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKlienRequest $request, Klien $klien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Klien $klien)
    {
        //
    }
}
