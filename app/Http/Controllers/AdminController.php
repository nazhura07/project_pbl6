<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Artikel;
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



    public function artikelCreate(){
        return view('pages.admin.artikel.createartikel');
    }

    public function artikelStore(Request $request){

       // Validation rules
        $rules = [
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'link' => 'required|string|max:255',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];

    // Validate the request
    $request->validate($rules);

    // Store the uploaded file
    $fotoPath = $request->file('foto')->store('artikel_photos', 'public');

    // Create a new Artikel instance
    $artikel = new Artikel([
        'judul' => $request->input('judul'),
        'deskripsi' => $request->input('deskripsi'),
        'link' => $request->input('link'),
        'foto' => $fotoPath,
    ]);

    // Save the Artikel to the database
    $artikel->save();

    // Redirect back to the artikel index page with a success message
    return redirect()->route('admin.artikel')->with('success', 'Artikel added successfully.');
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
