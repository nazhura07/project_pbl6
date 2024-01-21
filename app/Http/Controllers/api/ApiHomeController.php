<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Konselor;
use Illuminate\Http\Request;

class ApiHomeController extends Controller
{
    public function index()
    {
        $dataArtikel = Artikel::limit(3)->get();
        $dataDokter = Konselor::limit(3)->get();
        return response()->json([
            'artikel'=>$dataArtikel,
            'konselor'=>$dataDokter,
        ]);
    }
}
