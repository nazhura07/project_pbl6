<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreArtikelRequest;
use App\Http\Requests\UpdateArtikelRequest;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Artikel::all();
        // dd($data);
        return view('pages.admin.artikel.artikel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.artikel.createartikel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation rules

        $rules = [
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'link' => 'required|max:255',
            'foto' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Validate the request
        $request->validate($rules);

        // Store the uploaded file
        $fotoPath = $request->file('foto')->store('artikel_photos', 'public');

        // Create a new Artikel instance
        Artikel::insert([
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'link' => $request->input('link'),
            'gambar' => $fotoPath,
        ]);

        // Redirect back to the artikel index page with a success message
        return redirect()->route('admin.artikel')->with('success', 'Artikel added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        // dd($artikel);
        return view('pages.admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'link' => 'required|string|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // Delete the existing file
            Storage::disk('public')->delete($artikel->gambar);

            // Store the new file
            $fotoPath = $request->file('foto')->store('artikel_photos', 'public');
            $artikel->gambar = $fotoPath;
        }

        // Update artikel data
        $artikel->judul = $request->input('judul');
        $artikel->deskripsi = $request->input('deskripsi');
        $artikel->link = $request->input('link');

        $artikel->save();

        return redirect()->route('admin.artikel')->with('success', 'Artikel updated successfully.');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);

        // Delete the associated file
        Storage::disk('public')->delete($artikel->gambar);

        // Delete the artikel record
        $artikel->delete();

        return redirect()->route('admin.artikel')->with('success', 'Artikel deleted successfully.');
    }
}
