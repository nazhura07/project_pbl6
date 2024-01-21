<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konselor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'pendidikan_terakhir',
        'alamat',
        'tanggal_lahir',
        'nomor_telepon',
        'status',
        'spesialisasi', 
        'foto',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    // You can define relationships or other model-specific methods here
}
