<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JamKonseling extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'waktu_awal',
        'waktu_akhir',
        'status',
        'konselor_id',
        // Add other fields as needed
    ];
}
