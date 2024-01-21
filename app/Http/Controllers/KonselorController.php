<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
use App\Http\Requests\StoreKonselorRequest;
use App\Http\Requests\UpdateKonselorRequest;
use App\Models\JamKonseling;
use Illuminate\Http\Request;

class KonselorController extends Controller
{
    public function berandaKonselor(){
        return view('pages.konselor.beranda');
    }
    public function pengajuanKonselor(){
        return view('pages.konselor.pengajuankonseling');
    }

    public function jadwalKonselor(){
        return view('pages.konselor.jadwal.jadwal');
    }

    public function jadwalKonselorCreate(){
        return view('pages.konselor.jadwal.createjadwal');
    }
    
    public function jadwalKonselorStore(Request $request){
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'jam_awal' => 'required|date_format:H:i',
            'jam_akhir' => 'required|date_format:H:i|after:jam_awal',
        ]);

        // Example: Create a new Jadwal record in the database
        $jadwal = new JamKonseling([
            'tanggal' => $validatedData['tanggal'],
            'waktu_awal' => $validatedData['jam_awal'],
            'waktu_akhir' => $validatedData['jam_akhir'],
            'konselor_id' => auth()->user()->id,
            'status' => 1,
            // Add other fields as needed
        ]);

        $jadwal->save();

        // You can redirect to a success page or do other actions here
        return redirect()->route('success')->with('success', 'Jadwal berhasil ditambahkan!');
    }
}

