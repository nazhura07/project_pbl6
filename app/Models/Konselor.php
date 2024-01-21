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
        'tahun_lulus',
        'ijazah_profesi',
        'surat_izin',
        'nomor_telepon',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    // You can define relationships or other model-specific methods here
}
