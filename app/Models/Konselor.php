<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Konselor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasRoles;

    protected $guarded = [];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function jamKonselings()
    {
        return $this->hasMany(JamKonseling::class, 'konselor_id','id');

    }
}
