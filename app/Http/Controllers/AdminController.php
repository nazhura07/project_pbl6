<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Konselor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function berandaAdmin()
    {
        return view('pages.admin.beranda');
    }
    public function konselorAdmin()
    {
        $konselors = Konselor::all();
        return view('pages.admin.konselor.konselor', compact('konselors'));
    }

    public function konselorCreate()
    {
        return view('pages.admin.konselor.createkonselor');
    }

    public function konselorEdit($konselor)
    {
        $konselors = Konselor::findOrFail($konselor)->first();
        // dd($konselors) ;
        return view('pages.admin.konselor.editkonselor', compact('konselors'));
    }
    public function konselorUpdate(Request $request, $konselor)
    {
        // Menemukan data Konselor berdasarkan ID
        $konselors = Konselor::findOrFail($konselor);

        // Validasi input
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pendidikan_terakhir' => 'required',
            'alamat' => 'required',
            'spesialis' => 'required|string',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menghapus gambar lama jika ada gambar baru diunggah
        if ($request->hasFile('foto')) {
            // Menghapus gambar lama
            Storage::disk('public')->delete($konselors->foto);

            // Mengunggah gambar baru
            $fotoPath = $request->file('foto')->store('konselor_photos', 'public');

            // Memperbarui data Konselor dengan gambar yang baru
            $konselors->update([
                'nama' => $request->input('nama'),
                'spesialisasi' => $request->input('spesialis'),
                'alamat' => $request->input('alamat'),
                'email' => $request->input('email'),
                'pendidikan_terakhir' => $request->input('pendidikan_terakhir'),
                'foto' => $fotoPath,
                'status' => true,
            ]);
        } else {
            // Jika tidak ada gambar baru diunggah, hanya memperbarui data Konselor tanpa menghapus gambar lama
            $konselors->update($request->all());
        }

        // Redirect kembali ke halaman dengan pesan sukses
        return redirect()->route('admin.konselor')->with('success', 'Konselor berhasil diperbarui!');
    }


    public function konselorStore(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pendidikan_terakhir' => 'required',
            'alamat' => 'required',
            'spesialis' => 'required|string',
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
            'foto' => $fotoPath,
            'status' => true,
        ]);

        // Redirect kembali ke halaman dengan pesan sukses
        return redirect()->route('admin.konselor')->with('success', 'Konselor berhasil ditambahkan!');

    }
    public function konselorDestroy($konselor)
    {
        $konselors = Konselor::findOrFail($konselor);
        // dd($konselors->delete());
        $konselors->delete();
        return redirect()->route('admin.konselor')->with('success', 'Konselor berhasil dihapus!');
    }
}
