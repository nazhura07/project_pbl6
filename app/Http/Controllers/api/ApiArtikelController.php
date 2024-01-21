<?php

namespace App\Http\Controllers\api;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Artikel::all();
        return response()->json($data);
    }
}
