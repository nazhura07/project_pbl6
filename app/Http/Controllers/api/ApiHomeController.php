<?php

namespace App\Http\Controllers\api;

use App\Models\Artikel;
use App\Models\Konselor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
