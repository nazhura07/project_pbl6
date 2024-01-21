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

    // You can define relationships or other model-specific methods here
}
