<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
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
        return view('pages.konselor.jadwal.jadwal');
    }

    public function jadwalKonselorCreate(){
        return view('pages.konselor.jadwal.createjadwal');
    }
    
    public function jadwalKonselorStore(){
        
    }
}
