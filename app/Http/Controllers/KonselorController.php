<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Konselor;
use App\Models\JamKonseling;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKonselorRequest;
use App\Http\Requests\UpdateKonselorRequest;

class KonselorController extends Controller
{
    public function berandaKonselor(){
        return view('pages.konselor.beranda');
    }
    public function pengajuanKonselor(){
        return view('pages.konselor.pengajuankonseling');
    }

    public function jadwalKonselor(){
        $jadwal = JamKonseling::where('status',1)->get();
        return view('pages.konselor.jadwal.jadwal',compact('jadwal'));
    }

    public function jadwalKonselorCreate(){
        return view('pages.konselor.jadwal.createjadwal');
    }
    public function jadwalKonselorDestroy(JamKonseling $jadwal){
        try{
            $data = JamKonseling::find($jadwal->id);
            // dd($id);
            $data->update([
                'status' => false
            ]);
            return redirect()->route('konselor.jadwal')->with('success', 'Jadwal berhasil di batalkan!');
        }catch(\Exception $e){
            // throw $e;
            return redirect()->back()->with('error', 'Jadwal gagal di batalkan!');
        }

    }
    
    public function jadwalKonselorStore(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'jam_awal' => 'required|date_format:H:i',
            'jam_akhir' => 'required|date_format:H:i|after:jam_awal',
        ]);
        $dataTanggal = $request->tanggal;
        // dd($dataTanggal);
        $dateTime = Carbon::parse($dataTanggal, 'Asia/Jakarta');
        $tanggal = $dateTime->format('Y-m-d');
        // Example: Create a new Jadwal record in the database
        $jadwal = new JamKonseling([
            'tanggal' => $tanggal,
            'waktu_awal' => $validatedData['jam_awal'],
            'waktu_akhir' => $validatedData['jam_akhir'],
            'konselor_id' => 1,
            'status' => 1,
            // Add other fields as needed
        ]);

        $jadwal->save();

        // You can redirect to a success page or do other actions here
        return redirect()->route('konselor.jadwal')->with('success', 'Jadwal berhasil ditambahkan!');
    }
}

