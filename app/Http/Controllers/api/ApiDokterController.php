<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
use Illuminate\Http\Request;

class ApiDokterController extends Controller
{
    
    public function index()
    {
        $data = Konselor::all();
        return response()->json($data);
    }

    public function show(string $id)
    {
        $konselors = Konselor::findOrFail($id)->first();
        return response()->json($konselors);
    }

}
