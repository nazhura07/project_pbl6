<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use App\Models\Artikel;
use App\Models\Konselor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKlienRequest;
use App\Http\Requests\UpdateKlienRequest;
use App\Models\SesiKonseling;

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
